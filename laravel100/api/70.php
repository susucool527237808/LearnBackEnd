<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/6
 * Time: 18:13
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    http协议是Typer Text Transfer Protocol，即超文本传输协议的缩写。是一个用于万维网的服务器传输超文本到本地浏览器的传送协议。<br>
    http协议基于TCP/IP通信协议来传输数据。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
