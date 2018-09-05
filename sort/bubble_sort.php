<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/13
 * Time: 17:35
 */
function bubble_sort($array){
    $length = count($array);
    for( $i=0; $i < $length-1; $i++ ){
        for( $j=$i+1; $j < $length; $j++){
            if( $array[$i] > $array[$j] ){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

var_dump(bubble_sort(array(1)));
