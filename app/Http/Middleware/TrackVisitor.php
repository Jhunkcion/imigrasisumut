<?php
namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip        = $request->ip();
        $userAgent = $request->userAgent();
        $url       = $request->fullUrl();

        $agent = new Agent();
        $agent->setUserAgent($userAgent);

        $device   = $agent->device() ?: 'Unknown Device';
        $platform = $agent->platform() ?: 'Unknown Platform';
        $browser  = $agent->browser() ?: 'Unknown Browser';

        $isAlreadyVisited = Visitor::where('ip_address', $ip)
            ->where('user_agent', $userAgent)
            ->whereDate('visited_at', Carbon::today())
            ->exists();

        if (!$isAlreadyVisited) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'url'        => $url,
                'visited_at' => now(),
                'device'     => $device,
                'platform'   => $platform,
                'browser'    => $browser,
            ]);
        }

        return $next($request);
    }
}