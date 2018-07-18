<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/7/18
 * Time: 10:29
 */
error_reporting(E_ALL);

function say($st)
{
    echo $st;
}

call_user_func('say','hello');