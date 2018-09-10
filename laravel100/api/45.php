<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 17:24
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    MyISAM类型不支持事务处理、外键等功能，但是性能佳、执行速度快。<br>
    InnoDB类型的话性能差点，但是支持事务。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}