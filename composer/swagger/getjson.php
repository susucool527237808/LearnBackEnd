<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/17
 * Time: 13:54
 */
namespace myswagger;

require 'vendor/autoload.php';

/**
 * 返回JSON格式的Swagger定义
 *
 * 这里需要一个主`Swagger`定义：
 * @SWG\Swagger(
 *   @SWG\Info(
 *     title="我的`Swagger`API文档",
 *     version="1.0.0"
 *   )
 * )
 */
//$openapi = \Swagger\scan("F:\WWW\LearnBackEnd\composer\laravel-swagger\blog\app\Http/Controllers");
$openapi = \Swagger\scan(__DIR__);
echo json_encode($openapi);