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
              // Models
              $this->publishes([
                __DIR__.'/Models' => app_path('Models/Beos'),
            ], 'laravel-lokasyon-models');
              // Excel dosyası
              $this->publishes([
                __DIR__.'/Database/Excel/dosya.xlsx' => public_path('location/dosya.xlsx'),
            ], 'laravel-lokasyon-excel');
        }
    }

    public function register()
    {
        //
    }
}