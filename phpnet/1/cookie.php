<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/10/24
 * Time: 15:57
 */
echo 'shopping car 购物车 cookie';
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 1;
}
setcookie('count', $count, time()+3600);
$item = mt_rand(1,100);
setcookie("Cart[$count]", $item, time()+3600);
