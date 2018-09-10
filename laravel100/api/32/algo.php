<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 15:37
 */
$a = "new string";
$b = $a;
xdebug_debug_zval( 'a' );
die;

$array = [1,2,3,3,2,1,5];
var_dump(findOne($array));


/*
 * 两个相同数字异或=0，一个数和0异或还是它本身 所以当只有一个数出现一次时，我们把数组中所有的数，依次异或运算，最后剩下的就是落单的数，因为成对儿出现的都抵消了
 * */
function findOne(){
    $args = func_get_args();
    $return = 0;
    foreach($args[0] as $v){
        $return ^= $v;
    }
    return $return;
}