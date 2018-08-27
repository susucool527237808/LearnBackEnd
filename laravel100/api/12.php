<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/27
 * Time: 16:33
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $return = "
    主键包含唯一性索引，或者这样说，主键一定是唯一性索引，唯一性索引不一定是主键<br>
    一个表中可以有多个唯一性索引，但是只能有一个主键<br>
    主键不允许有控制，唯一性索引可以为空<br>
    主键可以被其他表做外键使用，唯一性索引则不能<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}
