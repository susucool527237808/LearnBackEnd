<?php

/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/5/30
 * Time: 16:07
 *
 *
 * 1、给你四个坐标点，判断它们能不能组成一个矩形，如判断([0,0],[0,1],[1,1],[1,0])能组成一个矩形。
 *
 * 解题思路：
 *
 * 矩形的特征：对角线相等的平行四边形是矩形
 * 那么我们按照要求出这四个点两两之间的距离，进行从小到大排序之后，6个数分成2个一组的3组数
 * 4个点不重合，每组里的值两两相等（平行四边形）
 * 每一组里挑一个数（都一样的），挑出来的三个数满足勾股定理（矩形）
 *
 */
class Title1
{
    function isRectangle($point1, $point2, $point3, $point4)
    {
        $pointArray = array($point1, $point2, $point3, $point4);
        if( count(array_unique($pointArray,SORT_REGULAR)) == 4 ){ // 4点不重合
            $lengthArr = array();
            $lengthArr[] = $this->getLengthSquare($point1, $point2);
            $lengthArr[] = $this->getLengthSquare($point1, $point3);
            $lengthArr[] = $this->getLengthSquare($point1, $point4);
            $lengthArr[] = $this->getLengthSquare($point2, $point3);
            $lengthArr[] = $this->getLengthSquare($point2, $point4);
            $lengthArr[] = $this->getLengthSquare($point3, $point4);
            array_multisort($lengthArr); //排序
            if( $lengthArr[5] == $lengthArr[4] && $lengthArr[3] == $lengthArr[2] && $lengthArr[1] == $lengthArr[0] ){
                if( $lengthArr[0] + $lengthArr[3] == $lengthArr[5] ){
                    $return = true;
                } else {
                    $return = false;
                }
            } else {
                $return = false;
            }        } else {
            $return = false;
        }
        return $return;
    }

    function getLengthSquare($point1, $point2)
    {
        return pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2);
    }

}

$title = new Title1();


if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $params = $_POST['params'];
    $point_array = explode(',',$params);
    if( count($point_array) == 8 ){
        $isRectangle = $title->isRectangle(array($point_array[0], $point_array[1]), array($point_array[2], $point_array[3]), array($point_array[4], $point_array[5]), array($point_array[6], $point_array[7]));
        $return = $isRectangle?'能够组成矩形':'不能组成矩形';
        $return = array('statusCode'=>'success','msg'=>$return);
    } else {
        $return = array('statusCode'=>'error','msg'=>'输入不符要求');
    }
    echo json_encode($return,JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode('请用post请求',JSON_UNESCAPED_UNICODE);
}

//var_dump($title->isRectangle(array(0, 0), array(1, 1), array(0, 1), array(1, 0)));






