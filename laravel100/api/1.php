<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/5/30
 * Time: 16:07
 */
function isRectangle($point1, $point2, $point3, $point4){
    if ($point1 == $point2 || $point1 == $point3  || $point1 == $point4 || $point2 == $point3 || $point2 == $point4 || $point3 == $point4) {
        return false;
    }
    $lengthArr = [];
    $lengthArr[] = getLengthSquare($point1, $point2);
    $lengthArr[] = getLengthSquare($point1, $point3);
    $lengthArr[] = getLengthSquare($point1, $point4);
    $lengthArr[] = getLengthSquare($point2, $point3);
    $lengthArr[] = getLengthSquare($point2, $point4);
    $lengthArr[] = getLengthSquare($point3, $point4);

    $lengthArr = array_unique($lengthArr);
    $lengthCount = count($lengthArr);
    if ($lengthCount == 3 || $lengthCount == 2 ) {
        if ($lengthCount == 2) {
            return(max($lengthArr) == 2*min($lengthArr));
        } else {
            $maxLength = max($lengthArr);
            $minLength = min($lengthArr);
            $otherLength = array_diff($lengthArr, [$maxLength, $minLength]);
            return($minLength + $otherLength == $maxLength);
        }
    } else {
        return false;
    }
}

function getLengthSquare($point1, $point2){
    $res = pow($point1[0]-$point2[0], 2)+pow($point1[1]-$point2[1], 2);
    return $res;
}

var_dump(isRectangle([0,0],[0,2],[2,2],[2,0]));
