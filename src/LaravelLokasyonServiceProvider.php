<?php

namespace Laravel\Lokasyon;

use Illuminate\Support\ServiceProvider;

class LaravelLokasyonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Seeder'ı yayınla (opsiyonel)
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/Database/Migrations' => database_path('migrations'),
            ], 'laravel-lokasyon-migrations');
            $this->publishes([
                __DIR__.'/Database/Seeders/LocationSeeder.php' => database_path('seeders/LocationSeeder.php'),
            ], 'laravel-lokasyon-seeders');
        }
    }

    public function register()
    {
        //
    }
}