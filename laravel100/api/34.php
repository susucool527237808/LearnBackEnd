<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 15:28
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    简单的说，是用zend引擎中一个叫zval的结构体来实现的。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}