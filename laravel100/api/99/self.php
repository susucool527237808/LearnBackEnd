<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 15:44
 */

class Person {

    public static $name = '小红<br>';

    public static function getName() {
        echo self::$name;
    }

}

$p = new Person();
$p2 = new Person();
$p::getName(); //小红
$p2::getName(); //小红
$p::$name = '小明<br>';
$p::getName(); //小明
$p2::getName(); //小明