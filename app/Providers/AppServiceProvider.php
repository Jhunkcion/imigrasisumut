<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Tetap pakai HTTPS kalau di local
        if (config('app.env') === 'local') {
            URL::forceScheme('https');
        }

        // Log pengunjung (1x per IP per hari)
        if (!app()->runningInConsole()) {
            $ip = Request::ip();
            $today = now()->toDateString();

            $alreadyVisited = DB::table('visitors')
                ->where('ip_address', $ip)
                ->whereDate('visited_at', $today)
                ->exists();

            if (!$alreadyVisited) {
                DB::table('visitors')->insert([
                    'ip_address' => $ip,
                    'visited_at' => now()
                ]);
            }
        }
    }
}
