<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/6
 * Time: 15:22
 */

function foo(){
    echo "In foo()<br>";
}

function bar($arg = ''){
    echo "In bar(); argument was '$arg'.<br>";
}

function echoit( $string ){
    echo $string."<br>";
}

$func = 'foo';
$func(); // foo()

$func = 'bar';
$func('test'); // bar()

$func = 'echoit';
$func('test');

class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // This calls the Bar() method
    }

    function Bar()
    {
        echo "This is Bar<br>";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();   // This calls $foo->Variable()