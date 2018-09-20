<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/20
 * Time: 13:41
 */

function multi_foreach( $mix_array ){
    static $array;
    if( !is_array($mix_array) ){
        return $mix_array;
    } else {
        foreach( $mix_array as $k=>$v ){
            if( !is_array($v) ){
                $array[] = $v;
            } else {
                multi_foreach($v);
            }
        }
        return $array;
    }
}

//$array = array('a'=>'a~',2,3,'b'=>array(4,'aa'=>5,6,array(7,'bb'=>8),9,10),11,12);
//$multi_foreach = multi_foreach($array);
//var_dump($multi_foreach);

$array = array('a'=>'a~',2,3,'b'=>array(4,'aa'=>5,6,array(7,'bb'=>8),9,10),11,12);
$arrayIterator = new RecursiveArrayIterator($array);
$iterator = new RecursiveIteratorIterator($arrayIterator);
foreach( $iterator as $k=>$v ){
    echo $k."->".$v."<br>";
}