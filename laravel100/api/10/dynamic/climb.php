<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/31
 * Time: 17:03
 * Title: 爬楼梯：你正在爬楼梯，需要n步你才能到达顶部。但每次你只能爬一步或者两步，你能有多少种不同的方法爬到楼顶部？
 */

echo "总共有： ".climb(20)." 种方法";

function climb( $n ){

    if( $n<1 ){
        return 0;
    }

    $plan = []; // 来存总共方法

    $plan[1] = 1;
    $plan[2] = 2;

    for( $i=3; $i<=$n; $i++ ){
        $plan[$i] = $plan[$i-2] + $plan[$i-1];
    }

    return $plan[$n];

}