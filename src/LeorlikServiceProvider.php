<?php

namespace Leorlik\PackageL;

use Illuminate\Support\ServiceProvider;

class LeorlikServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                InstallCommand::class,
//                NetworkCommand::class,
//            ]);
//        }

        $this->publishes([
            __DIR__.'/../config/leorlik.php' => config_path('leorlik.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/leorlik.php', 'leorlik'
        );

        $this->app->bind(StrService::class);
    }
}