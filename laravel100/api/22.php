<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/28
 * Time: 15:10
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    echo,print都是语言结构，而print_r是函数<br>
    echo,print可以不用圆括号包围参数列表，print仅支持一个字符串参数，echo支持多个字符串参数，print总是返回1，echo因为没有返回值运行效率比print快一点点<br>
    print_r支持一个混合参数（字符串，数字或数组），显示一个易于理解的信息，第二个参数给true，则不打印结果而返回结果<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
