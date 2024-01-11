<h1 align="center"> laravel-spark-ai </h1>

> 讯飞星火大模型非官方 SDK.

[![StyleCI](https://github.styleci.io/repos/723293905/shield?branch=main&style=flat)](https://github.styleci.io/repos/723293905?branch=main&style=flat)
[![Latest Stable Version](http://poser.pugx.org/jiannei/laravel-spark-ai/v)](https://packagist.org/packages/jiannei/laravel-spark-ai)
[![Total Downloads](http://poser.pugx.org/jiannei/laravel-spark-ai/downloads)](https://packagist.org/packages/jiannei/laravel-spark-ai)
[![Latest Unstable Version](http://poser.pugx.org/jiannei/laravel-spark-ai/v/unstable)](https://packagist.org/packages/jiannei/laravel-spark-ai)
[![License](http://poser.pugx.org/jiannei/laravel-spark-ai/license)](https://packagist.org/packages/jiannei/laravel-spark-ai) 

## 介绍

- [星火大模型 API 免费套餐](https://xinghuo.xfyun.cn/sparkapi?scr=price)
- [官方文档](https://www.xfyun.cn/doc/spark/Web.html)


## 安装

```shell
$ composer require jiannei/laravel-spark-ai -vvv
```

## 配置

在[控制台](https://console.xfyun.cn/services/bm3)获取服务接口认证信息：APPID、APISecret、APIKey

在 `config/services.php` 中添加配置参数

```php
// config/services.php
'xfyun' => [
    // 密钥信息，在开放平台-控制台中获取：https://console.xfyun.cn/services/cbm
    'url' => env('XFYUN_URL'),
    'app_id' => env('XFYUN_APP_ID'),
    'api_key' => env('XFYUN_API_KEY'),
    'api_secret' => env('XFYUN_API_SECRET'),
],
```

在 `.env`中填入前面获取的参数信息

```
XFYUN_URL=
XFYUN_APP_ID=
XFYUN_API_KEY=
XFYUN_API_SECRET=
```

## 使用

- 流式输出

```php
use Jiannei\LaravelSparkAi\Support\Facades\SparkAi;


$answer = SparkAi::chat()->create('你是谁？');

foreach ($answer as $item) {
    print_r($item);
}
```

![answer](https://raw.githubusercontent.com/jiannei/snc-pro/master/images/202401101917408.gif)

- 完整输出

```php
use Jiannei\LaravelSparkAi\Support\Facades\SparkAi;


$answer = SparkAi::chat()->answer('你是谁？');

print_r($answer);
```

## License

MIT