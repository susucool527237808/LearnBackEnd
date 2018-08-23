<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 15:00
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = '
    this 指向当前对象，用来访问当前对象的非静态变量和非静态方法;<br>
    self 指向当前类，一般用来访问当前类的静态变量和静态方法，运行前已经确定指向哪个类;<br>
    static 指向类，一般用来访问当前类的静态变量和静态方法，但又不限于静态的调用，运行时才确定指向哪个类。<br>
    ';
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
