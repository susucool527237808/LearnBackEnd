<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 16:42
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    时间复杂度的大O推导法：用常数1取代运行次数中的所有加法常数，然后再只保留最高阶项，如果存在最高阶再去除与其相乘的常数。<br>
    32题如果用异或法，则运算次数是n，所以时间复杂度是O(n)。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}