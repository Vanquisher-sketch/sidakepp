<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- PENTING: Import URL

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
        // PENTING: Paksa HTTPS saat di Production (Vercel)
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}