<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/7
 * Time: 17:39
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    哈希是一种算法，实质上是对原始数据的有损压缩，压缩成固定字长，用来唯一表示原始数据。<br>
    不同的原始数据有损压缩之后，产生了相同的结果，这就叫做哈希碰撞。<br>
    php里用链地址法解决冲突，即让产生冲突的记录存储在一张线性表中，表头即是压缩后的哈希地址。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}