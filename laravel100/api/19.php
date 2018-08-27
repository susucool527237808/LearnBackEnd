<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/27
 * Time: 11:46
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    作为单个逻辑单元执行的一系列操作，要么完全执行，要么完全不执行<br>
    满足4个特性ACID，原子性、一致性、隔离性、持久性。<br>
    原子性：事务作为整体，包含其中的操作要么全部执行，要么全部不执行<br>
    一致性：从一个一致性状态转变为另外一个一致性状态<br>
    隔离性：一个事务的执行不影响另外一个<br>
    持久性：事务一旦提交，对数据库的修改是永久的<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
