<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/29
 * Time: 13:22
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    XSS是跨站脚本攻击的简写(cross site script)，指通过畸形的输入，将恶意代码插入到页面，其他用户浏览页面时，恶意代码执行，产生攻击，XSS产生原因是对用户输入的信任<br>
    CSRF是跨站请求伪造的简写（cross site request forgery），指在受害者毫不知情的情况下以受害者名义发送请求，原理是利用受害者的cookie骗取服务器信任。<br>
    XSS的防范主要是把用户输入都当做不可信任数据来处理，需要进行检查、过滤、转义等。<br>
    CSRF的防范主要可以通过检查HTTP Referer字段，或者添加校验token来解决。<br>
    XSS核心是注入恶意代码到页面，而CSRF的核心是伪造用户骗取服务器信任。
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
