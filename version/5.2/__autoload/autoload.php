<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 10:15
 */

function __autoload($classname){
    $filename = "./".$classname.".php";
    include_once($filename);
}

$obj = new myClass();