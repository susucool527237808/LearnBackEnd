<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/17
 * Time: 17:54
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    call_user_func(\$callback)和call_user_func_array(\$callback)函数支持回调。
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}