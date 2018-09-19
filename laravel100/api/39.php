<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/17
 * Time: 17:54
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    call_user_func(\$callback)和call_user_func_array(\$callback)函数支持回调。<br>
    可以利用这两个函数来创建一个类，比如Model，然后有bind和exec方法，bind方法把事务名和事务的匿名函数存在一个数组里，exec方法利用存的事务名找到对应函数利用call_user_func_array传参数并执行对应的匿名函数。
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}