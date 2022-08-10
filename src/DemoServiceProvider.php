<?php
namespace ntlongg\demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this-> loadRoutesFrom(__DIR__.'/Routers/web.php');
        $this -> loadViewsFrom(__DIR__.'/Views','curd');
        $this -> loadMigrationsFrom(__DIR__.'/Database/Migrations');
    }
}
