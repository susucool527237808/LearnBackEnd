<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/6
 * Time: 18:22
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    xml是通用标准语言SGML的子集，提供统一的方法来描述和交换结构化数据。<br>
    json是一种轻量级的数据交换格式，有良好的可读性和便于快速编写的特性。<br>
    xml重量级，文件庞大，传输占带宽，服务端和客户端解析都需要花费较多的资源和时间。<br>
    但是xml格式统一，业界标准，还提供一部分一部分解析的方式。<br>
    json轻量级，格式简单，易读写，占用带宽小。<br>
    但是json通用性没有xml强，并且解析的时候只提供整体解析的方式。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}