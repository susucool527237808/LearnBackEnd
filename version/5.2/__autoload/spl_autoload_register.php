<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 10:43
 */
//namespace laravel100\version;

// 或者，自 PHP 5.3.0 起可以使用一个匿名函数
spl_autoload_register(function($class){
    include_once './'.$class.".php";
});

$obj = new myClass();