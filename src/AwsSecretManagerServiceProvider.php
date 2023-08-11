<?php

namespace Minhajul\AwsSecretManager;

use Illuminate\Support\ServiceProvider;

class AwsSecretManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => base_path('config/aws-secret-manager.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('AwsSecretManager', function ($app) {
            return $app->make('Minhajul\AwsSecretManager\AwsSecretManager');
        });
    }
}
