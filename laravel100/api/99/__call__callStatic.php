<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 17:33
 */

class Man {

    function __call ( $name , $arguments )
    {
        // TODO: Implement __call() method.
        echo 'unkown method '. $name.'<br>';
        echo 'unkown method arguments is'.serialize($arguments).'<br>';
    }

    public static function __callStatic ( $name , $arguments )
    {
        // TODO: Implement __callStatic() method.
        echo 'unkown static method '. $name.'<br>';
        echo 'unkown static method arguments is '.serialize($arguments).'<br>';
    }

}

$man = new Man();
$man->eat('food');
Man::drink();