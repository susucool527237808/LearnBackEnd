<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 11:47
 */


if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    SQL注入原理是指未经检查或者未经充分检查的用户输入数据，意外变成代码被执行，从未产生了恶意代码。<br>
    防止注入的方法有SQL的参数化查询和词法分析。<br>
    参数化查询就是将带有占位符的SQL语句传给数据库编译，执行的时候才将用户输入的数据作为执行的参数传给数据库。<br>
    词法分析就是使用代码过滤用户输入的特殊字符。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}