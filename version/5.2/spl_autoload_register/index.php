<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 14:08
 */

class AutoLoading {

    public static function load1($classname) {

        echo 1;
        if (is_file("./".$classname.".php")) {
            require_once "./".$classname.".php";
        }

    }

    public static function load2($classname) {

        echo 2;
        if (is_file("./app/".$classname.".php")) {
            require_once "./app/".$classname.".php";
        }

    }

    public static function __autoload($classname) {

        echo 3;
        if (is_file("./lib/".$classname.".php")) {
            require_once "./lib/".$classname.".php";
        }

    }

}

spl_autoload_register(['AutoLoading','load1']);
spl_autoload_register(['AutoLoading','load2']);
spl_autoload_register(['AutoLoading','__autoload']);

$db = new DB();
$info = new Info();
var_dump(spl_autoload_functions());