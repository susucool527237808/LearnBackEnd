<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/12
 * Time: 14:03
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    Trait的优先级大于父类方法，小于当前类方法。<br>
    也就是说，Trait的方法会覆盖父类方法，而当前类方法会覆盖Trait的方法。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}