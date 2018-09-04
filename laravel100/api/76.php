<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/4
 * Time: 10:24
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    最少5只小白鼠。<br>
    把10个瓶子全部转换成2进制，从0到10依次编号。那么每只小白鼠可以控制2进制的一位，比如让一只小白鼠把某一位为1的所有水都喝过，如果死了，证明这一位为1，不死证明为0。<br>
    5位2进制可以支持16种情况，即可以判断最大16瓶水中其中一瓶有毒的情况。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
