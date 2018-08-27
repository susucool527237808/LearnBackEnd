<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/27
 * Time: 11:20
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    1XX，信息性状态码，服务器正在处理<br>
    2XX，成功状态码，请求被正常处理<br>
    3XX，重定向状态码，需要额外的操作以完成请求<br>
    4XX，客户端错误状态码，客户端的原因导致服务器无法处理请求<br>
    4XX，服务器错误状态码，服务器原因导致请求出错<br>
    常见的：200 请求成功，301 网页或者资源被永久转移到其他url，404请求的网页或者资源不存在，500服务器内部错误<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
