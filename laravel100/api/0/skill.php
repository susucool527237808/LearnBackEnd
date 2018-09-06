<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/6
 * Time: 15:27
 */

// 可变标识符
$i = 3;
$k = 'i';
echo $$k.'<br>';

function func(){
    echo 'hello<br>';
}

// 可变函数
$i = 'func';
$i();

// 可变类 可变属性
class CLS {
    public $k = 'variable value<br>';
}

$i = 'CLS';
$j = 'k';
$l = new $i();
echo $l->$j;

// 可变方法
class CLS2 {
    public function k(){
        echo 'variable function<br>';
    }
}
$i = 'k';
$j = new CLS2();
$j->$i();

$user='susucool';
$sql="select * from user as u where u.name='$user'";
echo $sql."<br>"; // php中，单引号和双音号都可以定义一段字符串，但区别是双引号会默认在解析中进行处理。而单引号不会。

$str = <<<TYPEOTHER
fdasfdsafdasfad//////213123"#123123"32143213123<br>2112<br>
TYPEOTHER;

echo $str;  // php 的 heredoc，大量插入html字符时候使用

$str=0;
if(!isset($str)){
    echo 'empty<br>';
} else {
    echo 'no<br>';
}//no
if(empty($str)){
    echo 'empty<br>';
} else {
    echo 'no<br>';
}//empty
if( $str===null ){
    echo 'empty<br>';
} else {
    echo 'no<br>';
}//no
if( $str==null ){
    echo 'empty<br>';
}
else{
    echo 'no<br>';
}//empty

function closureCreator(){
    $x = 1;
    return function($fun = null) use ( $x ){
        echo "$x<br>";
        $fun and $fun();
        echo "<br>";
    };
}

$test = closureCreator();
$test();
$test(function(){ echo "closure test one"; });
$test(function(){ echo "closure test two"; });
$x = 'hello world';
$test(function() use($x)
    {
        echo "<br />".$x;
    });

$point = [1,2,3,4,5,6];
echo current($point)."<br>";
echo pos($point)."<br>"; // current/pos 返回当前被内部指针指向的数组单元的值，并不移动指针。
echo key($point)."<br>"; // key 返回数组中当前单元的键名，并不移动指针
echo next($point)."<br>"; // next 将数组中的内部指针向前移动一位，并返回移动后当前单元的值。先移动，再取值。
echo prev($point)."<br>"; // prev 将数组的内部指针倒回一位，并返回移动后当前单元的值先移动，再取值。
echo end($point)."<br>"; // end 将数组的内部指针指向最后一个单元，并返回最后一个单元的值
echo current($point)."<br>";
echo reset($point)."<br>"; // reset 将数组的内部指针指向第一个单元，并返回第一个数组单元的值
echo current($point)."<br>";

