<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/3
 * Time: 15:11
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    rand()使用的是默认的随机数发生器，mt_rand()使用的是一种新的随机数发生器，所以按手册上来说，mt_rand()产生随机数的平均速度比rand()快接近4倍。<br>
    mt_rand()的随机数产生范围远远大于rand()。<br>
    从php7.1开始，mt_rand()已经取代了rand(),rand()的别名是mt_rand(),使用rand()内部其实调用的是mt_rand()。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
