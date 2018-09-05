<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/5
 * Time: 16:15
 */

$bool1 = true;
$bool2 = false;
var_dump((string)$bool1); // Boolean 的 TRUE 被转换成 string 的 “1”
echo "<br>";
var_dump((string)$bool2); // Boolean 的 FALSE 被转换成 “”（空字符串）
echo "<br>";
$array1 = array();
var_dump($array1); // 数组转化成字符串会变成Array，对象不可以转换成字符串
echo "<br>";
$foo=12 + intval("5fa");        // 结果为17，从字符串转换为int时，字符串的首字母若为整型，则转化为该整型，若字符串首字母不是整形，则转化为0.
var_dump($foo);
echo "<br>";
$bar=12 + intval("f5a");        // 结果为12，从字符串转换为int时，字符串的首字母若为整型，则转化为该整型，若字符串首字母不是整形，则转化为0.
var_dump($bar);
echo "<br>";
var_dump(intval(7.77)); // 当从浮点数转换成整数时，将向下取整。
echo "<br>";
var_dump((array)'sss'); // 对于任意 integer，float，string，boolean 和 resource 类型，如果将一个值转换为数组，将得到一个仅有一个元素的数组，其下标为 0
var_dump((array)6); // 对于任意 integer，float，string，boolean 和 resource 类型，如果将一个值转换为数组，将得到一个仅有一个元素的数组，其下标为 0
var_dump((array)6.66); // 对于任意 integer，float，string，boolean 和 resource 类型，如果将一个值转换为数组，将得到一个仅有一个元素的数组，其下标为 0
echo "<br>";
class A {
    private $A; // This will become '\0A\0A'
}

class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'
}

var_dump((array) new B()); //  object 类型转换为 array，则结果为一个数组，其单元为该对象的属性。键名将为成员变量名，不过有几点例外：整数属性不可访问；私有变量前会加上类名作前缀；保护变量前会加上一个 ‘*’ 做前缀。这些前缀的前后都各有一个 NULL 字符。
echo "<br>";

$obj = (object) 'ciao';
var_dump($obj);  // 将会创建一个内置类 stdClass 的实例。如果该值为 NULL，则新的实例为空，对于任何其它的值，名为 scalar 的成员变量将包含该值。
echo "<br>";

$char = 'hello';
var_dump((unset)$char);
var_dump(($char)); // (unset) $var 将一个变量转换为 null 将不会删除该变量或 unset 其值。仅是返回 NULL 值而已
echo "<br>";
var_dump("aa"==1); // false "aa"转换成int为0
var_dump("bb"==0); // true "bb"转换成int为0
var_dump(1=="1"); // true "1"转换成int为1
echo "<br>";
