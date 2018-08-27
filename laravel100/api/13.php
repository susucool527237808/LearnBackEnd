<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/27
 * Time: 17:13
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    HTTPS协议是构建在SSL/TLS之上的HTTP协议，可进行加密传输、身份认证，比HTTP协议安全，HTTP是明文传输<br>
    HTTP用80端口，HTTPS用443端口<br>
    HTTPS用需要申请CA证书<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
