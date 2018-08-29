<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/29
 * Time: 13:22
 * site: http://wiki.jikexueyuan.com/project/for-offer/question-forty-four.html
 * algo: 需要做 3 件事情： 首先把数组排序，再统计数组中 0 的个数，最后统计排序之后的数组中相邻数字之间的空缺总数。如果空缺的总数小于或者等于 0 的个数，那么这个数组就是连续的：反之则不连续。
 */

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $array = [0,0];
    for($i=1;$i<=13;$i++){
        for($j=1;$j<=4;$j++){
            $array[] = $i;
        }
    }
    shuffle($array);  // 打乱数组
    $random_key = array_rand($array,5);
    $random_value = []; // 随机值
    foreach($random_key as $v){
        $random_value[] = $array[$v];
    }
//    $random_value = [0, 3, 0, 5, 4];
    $isContinuous = isContinuous($random_value[0],$random_value[1],$random_value[2],$random_value[3],$random_value[4]);
    $return = "抽出的5张牌是：".implode(',',$random_value)."<br>是否是连续的：".($isContinuous?'是':'否')."<br>";
    $return .= "
    原理： 首先把数组排序，再统计数组中 0 的个数，最后统计排序之后的数组中相邻数字之间的空缺总数。如果空缺的总数小于或者等于 0 的个数，那么这个数组就是连续的：反之则不连续。<br>
    ";
    $return = array('statusCode'=>'success','msg'=>$return);
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}


function  isContinuous(){
    $args = func_get_args();
    if( $args == null || count($args) != 5 ){ //必须5个数
        return false;
    }
    sort($args); // 排序
    $numberOfZero = 0; // 0的总数
    $numberOfGap = 0; // 空缺总数
    foreach( $args as $v ){
        if( $v == 0 ){
            $numberOfZero++;
        }
    }
    $small = $numberOfZero; // 第一个非零参数的下标
    $big = $small + 1; //第二个非零参数的下标
    while( $big <= count($args)-1 ){
        if( $args[$small] == $args[$big] ){
            return false;
        }
        $numberOfGap += $args[$big] - $args[$small] - 1;
        $small = $big;
        $big = $small + 1;
    }
    return $numberOfGap <= $numberOfZero;
}
