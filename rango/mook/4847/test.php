<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/24
 * Time: 2:23 PM
 */

Test1\test();
Test2\test();

function __autoload($class)
{
    require __DIR__.'/'.$class.'. php';
}



