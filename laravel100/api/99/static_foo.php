<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 11:05
 */

class foo {
    public static function func(){
        var_dump(func_get_args());
    }
}

call_user_func_array(array('foo','func'),array('hello','world'));
