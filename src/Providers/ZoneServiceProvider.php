<?php

namespace AccessManager\Zones\Providers;

use Illuminate\Support\ServiceProvider;

class ZoneServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . "/../Routes/web.php");
        $this->loadViewsFrom(__DIR__ . '/../Views', 'Zones');
        $this->loadMigrationsFrom( __DIR__ . "/../Database/Migrations");
    }
}