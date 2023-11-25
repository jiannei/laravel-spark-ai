<?php

namespace Jiannei\LaravelSparkAi\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Jiannei\SparkAi\SparkAi chat(array $options, array $header = [], array $parameter = [])
 * @method static \Jiannei\SparkAi\SparkAi withContext(array $content)
 * @method static string getLatestResponse()
 * @method static string getLatestTokenUsage()
 * @method static string getAnswer()
 * @method static array history()
 *
 * @see \\Jiannei\SparkAi\SparkAi
 */
class SparkAi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jiannei\SparkAi\SparkAi::class;
    }
}
