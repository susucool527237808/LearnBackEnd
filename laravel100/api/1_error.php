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
 * 1、任取一点作为基准点 A
 *
 * 2、取距离基准点最远的点作为对角点 D（a^2+b^2不开方）
 *
 * 3、证明另外两点的连线 BC 被对角线 AD 平分，且两对角线相等
 *
 *
 * 补充1——证明对角线相等且平分的方法：
 *
 * 方法1：分别计算 AD 和 BC 中点，判断重合；另计算长度相等
 *
 * 方法2：取 AD 中点 O，计算向量 BO、OC，判断 BO = OC 且 |BO| = |OD|
 *
 * （注意double数据比较大小的方法：两数相减小于最小精度 = 两数相等）
 *
 * （距离计算：平方相加后直接比较，不开方，减小浮点数误差）
 *
 */
class Title1
{
    function isRectangle ( $point1 , $point2 , $point3 , $point4 )
    {
        $array[] = array ('point' => $point4 , 'length_square' => $this->getLengthSquare ($point1 , $point4));
        $array[] = array ('point' => $point3 , 'length_square' => $this->getLengthSquare ($point1 , $point3));
        $array[] = array ('point' => $point2 , 'length_square' => $this->getLengthSquare ($point1 , $point2));
        array_multisort (array_column ($array , 'length_square') , SORT_ASC , SORT_NUMERIC , $array);
        $a = $point1;
        $b = $array[0]['point'];
        $c = $array[1]['point'];
        $d = $array[2]['point'];
        $b_c_midpoint = $this->getMidPoint ($b , $c);
        $a_d_midpoint = $this->getMidPoint ($a , $d);
        if ( $a_d_midpoint === $b_c_midpoint ) {
            $o = $a_d_midpoint;
            if ( $this->getLengthSquare ($a , $o) == $this->getLengthSquare ($d , $o) && $this->getLengthSquare ($b , $o) == $this->getLengthSquare ($c , $o) ) {
                $return = true;
            } else {
                $return = false;
            }
        } else {
            $return = false;
        }
        return $return;
    }

    function getLengthSquare ( $point1 , $point2 )
    {
        return pow ($point2[0] - $point1[0] , 2) + pow ($point2[1] - $point1[1] , 2);
    }

    function getMidPoint ( $point1 , $point2 )
    {
        return array (( $point1[0] + $point2[0] ) / 2 , ( $point1[1] + $point2[1] ) / 2);
    }

}

$title = new Title1();

var_dump ($title->isRectangle (array (1 , 1) , array (2 , 2) , array (3 , 3) , array (4 , 4)));






