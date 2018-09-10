<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/10
 * Time: 17:34
 */

function xrange( $start, $end, $step=1 ){
    for( $i=$start; $i <= $end; $i += $step ){
        yield $i;
    }
}
foreach( xrange(1,10000) as $v ){
//    echo $v.'<br>';
    echo '--';sleep(1);
}