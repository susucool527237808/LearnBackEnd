<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/7
 * Time: 16:15
 */

$a = hash('md5','0e306561559aa787d00bc6f70bbdfe3404cf03659e704f8534c00ffb659c4c8740cc942feb2da115a3f4155cbb8607497386656d7d1f34a42059d78f5a8dd1ef');
$b = hash('md5','0e306561559aa787d00bc6f70bbdfe3404cf03659e744f8534c00ffb659c4c8740cc942feb2da115a3f415dcbb8607497386656d7d1f34a42059d78f5a8dd1ef');

echo $a."<br>";
echo $b."<br>";

$a = array();
$a[3] = 3;
$a[2] = 2;
$a[1] = 1;
var_dump($a);
