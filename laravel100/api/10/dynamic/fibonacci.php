<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/31
 * Time: 11:26
 */

$fib_count = 0;
echo "fib总和: ".fib(20).",执行次数: ".$fib_count."<br>";

$fib_dynamic_count = 0;
echo "dynamic_fib总和: ".dynamic_fib(20).",执行次数: ".$fib_dynamic_count."<br>";






function fib( $n ){
    // 统计 Start
    global $fib_count;
    $fib_count++;
    // 统计 End
    if( $n <0 )
        return 0;
    if( $n <= 1 )
        return 1;
    return fib($n-1) + fib($n-2);
}


function dynamic_fib( $n ){
    if( $n < 0 ) {
        return 0;
    }

    $fib_array = [];
    $fib_array[0] = 1;
    $fib_array[1] = 1;
    for( $pos=2; $pos <= $n; $pos++ ){
        // 统计 Start
        global $fib_dynamic_count;
        $fib_dynamic_count++;
        // 统计 End
        $fib_array[$pos] = $fib_array[$pos-2] + $fib_array[$pos-1];
    }

    return $fib_array[$n];

}




