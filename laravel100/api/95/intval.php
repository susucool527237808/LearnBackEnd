<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/5
 * Time: 11:43
 */
$var=123;
var_dump($var);
$var='66hi';
var_dump($var);
$var = '6.1' + 1;
var_dump($var);
$var=true;
var_dump($var);
echo "<br>";
var_dump(intval('dogs2')); // 0
echo "<br>";
var_dump(intval('6666.6dogs')); // 6666
echo "<br>";
var_dump(intval(0.58*100)); // 因为二进制的原因，57
echo "<br>";
var_dump(intval(0.57*100)); // 因为二进制的原因，56
echo "<br>";
var_dump(intval(0.56*100)); // 因56
echo "<br>";
