<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/28
 * Time: 15:10
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    首先说下区别:isset,empty,is_null<br>
    isset、empty是语言结构，is_null是函数，语言结构速度肯定比函数快<br>
    isset参数只能是变量，可以有多个参数，作用是检测参数是否已设置且不为NULL时返回true<br>
    empty只能有一个参数，在php 5.50以前参数只能是变量，以后可以为值、变量、表达式，作用是检测参数不存在或者它的值等同于false(null false 空字符串 所有0 空数组 声明没有赋值的变量)时返回true<br>
    is_null只能有一个参数，参数可以为值、变量、表达式，作用是检测参数为null时返回true<br>
    【所以】：isset(null) isset(false)报错，因为isset参数只能为变量，empty(null) empty(false)输出都为ture，因为参数都等同于false
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
