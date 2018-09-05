<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/5
 * Time: 17:33
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    == 是比较运算符，只检查比较双方的值。<br>
    === 是恒等运算符，同时检查比较双方的值和类型。<br>
    php是弱类型语言，在定义变量时不用声明它是什么类型，但是并不代表变量是没有类型的。<br>
    字符串与整形比较，会先把字符串转换成整形。而字符串转换为整形时，首字母是整形，则转换该整形直到不是整形的字符，首字母不是整形，则转换为0。所以字符串\"aa\" \"bb\" \"1\"转换为整形时分别为0 0 1。<br>
    输出分别为：false true true。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}