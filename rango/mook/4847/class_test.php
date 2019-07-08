<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/24
 * Time: 5:38 PM
 */

spl_autoload_register('autoload1');
spl_autoload_register('autoload2');

function autoload1($class)
{
    require __DIR__.'/'.$class.'.php';
}

function autoload2($class)
{
    require __DIR__.'/'.$class.'.php';
}

TestClass1::test();
TestClass2::test();