<?php

namespace Jiannei\LaravelSparkAi\Providers;

use Illuminate\Support\ServiceProvider;
use Jiannei\SparkAi\SparkAi;

class LaravelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SparkAi::class, function ($app) {
            $config = $app->config->get('services.xfyun');

            return (new SparkAi())->withConfig($config);
        });
    }
}