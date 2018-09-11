<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/11
 * Time: 10:09
 */

$url = 'http://www.sina.com.cn/abc/de/fg.php?id=1';

function getExt($url){
    $arr = parse_url($url);
    $explode = explode('.',$arr['path']);
    if( isset($explode[1]) ){
        return $explode[1];
    } else {
        return null;
    }
}

