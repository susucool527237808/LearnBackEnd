<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 14:27
 */
namespace AutoLoading;

class loading {

//    public static function autoload( $className ){
//
//        # Usually I would just concatenate directly to $file variable below
//        # this is just for easy viewing on Stack Overflow)
//        $ds = DIRECTORY_SEPARATOR;
//        $dir = __DIR__;
//
//        // replace namespace separator with directory separator (prolly not required)
//        $className = str_replace('\\', $ds, $className);
//
//        // get full name of file containing the required class
//        $file = "{$dir}{$ds}{$className}.php";
//
//        // get file if it is readable
//        if (is_readable($file)) require_once $file;
//
//
//    }

    public static function autoload($className)
    {
        //根据PSR-O的第4点 把 \ 转换层（目录风格符） DIRECTORY_SEPARATOR ,
        //便于兼容Linux文件找。Windows 下（/ 和 \）是通用的
        //由于namspace 很规格，所以直接很快就能找到
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR,  dirname(__FILE__) . '\\'. $className) . '.php';
        if (is_file($fileName)) {
            require $fileName;
        } else {
            echo $fileName . ' is not exist'; die;
        }
    }

}