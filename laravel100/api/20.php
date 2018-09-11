<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/11
 * Time: 11:44
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $params = $_POST['params'];
    $return = "
    标准URL扩展名：".getExt($params)."<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}


function getExt( $url ){
    $arr = parse_url($url);
    $explode = explode('.',$arr['path']);
    if( isset($explode[1]) ){
        return $explode[1];
    } else {
        return null;
    }
}