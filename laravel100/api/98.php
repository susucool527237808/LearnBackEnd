<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 15:00
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    在php中，双引号中的变量可以被服务器解析，而单引号中的内容则不能<br>
    所以'\$var'会直接输出字符串\$var，而\"\$var\"则会输出变量\$var的值。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
