<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/25
 * Time: 12:28 AM
 */

namespace IMook;

class Loader
{

    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\','/', $class).'.php';
    }

}