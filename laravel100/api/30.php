<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/7
 * Time: 18:24
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    首先在php中其实不存在数组和哈希的区别，php中数组的本质就是一个哈希表<br>
    从概念上来说，数组是元素在内存中连续存放的数据结构。而哈希表是数组和链表的结合，哈希碰撞后的值用链表来存放的数据结构。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}