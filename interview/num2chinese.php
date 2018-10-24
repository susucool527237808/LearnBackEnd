<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/17
 * Time: 9:28
 * 输入一个一亿以内的数，返回其中文
 */

function num2chinese($num){
    $chinese = array('零','一','二','三','四','五','六','七','八','九');
    $chinese_unit = array('','十','百','千','万','十','百','千','亿');
    $arr = str_split($num);
    $return = '';
    $count = count($arr);
    foreach( $arr as $k=>$v ){
        $return .= $chinese[$v]; // 值
        $return .= $chinese_unit[$count-($k+1)]; //单位
    }
    return $return;
}

var_dump(num2chinese(12357));