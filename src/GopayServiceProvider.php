<?php


namespace AndyAm\LaravelGoPaySDK;

use HazeStudio\LaravelGoPaySDK\Events\PaymentCreated;
use Illuminate\Support\ServiceProvider;

class GopayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('gopay.php'),
        ]);
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (is_dir($vendor = __DIR__ . '/../vendor')) {
            require_once $vendor . '/autoload.php';
        }
        
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', 'gopay'
        );
        
        $this->app->singleton('GopaySDK', function ($app) {
            return new GoPaySDK();
        });
    }
}