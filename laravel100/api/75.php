<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/4
 * Time: 17:35
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    对称加密的特点是文件加密和解密使用相同的密钥，主要方式有AES、DES。<br>
    非对称加密的特点是需要公开和私有两个密钥，它们是一对，能够互相加密解密，通信双方互发公钥加密信息，用对方的公钥加密信息，用自己的私钥解密信息，主要方式有RSA。<br>
    注意不管是对称、非对称加密都是可逆的加密方法，而md5属于不可逆的加密方法。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
