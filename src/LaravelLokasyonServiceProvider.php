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
              // Excel dosyası
              $this->publishes([
                __DIR__.'/Resources/Excel/dosya.xlsx' => public_path('location/dosya.xlsx'),
            ], 'laravel-lokasyon-assets');
        }
    }

    public function register()
    {
        //
    }
}