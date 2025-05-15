<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Hindari error saat dijalankan lewat CLI (seperti php artisan migrate, queue, dll)
        if (app()->runningInConsole()) {
            return;
        }

        $host = request()->getHost();

        // Paksa HTTPS jika menggunakan ngrok
        if (str_contains($host, 'ngrok.io')) {
            URL::forceScheme('https');
            config(['app.url' => 'https://' . $host]);
        }
    }
}
