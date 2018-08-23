<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 14:14
 */

class Boo {
    protected static $str = "This is class Boo";
   /* public static function get_info(){
        echo get_called_class()."<br>";
        echo self::$str;
    }*/
    public static function get_info(){
        echo get_called_class()."<br>";
        echo static::$str;
    }
}

class Foo extends Boo {
    protected static $str = "This is class Foo";
}

Foo::get_info();