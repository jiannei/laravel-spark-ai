<?php

/*
 * This file is part of the jiannei/laravel-spark-ai.
 *
 * (c) jiannei <jiannei@sinan.fun>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
