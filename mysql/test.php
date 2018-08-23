<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/16
 * Time: 11:56
 */

$conn = new mysqli('localhost','root','root','studyabroad');

if( $conn->connect_error ){
    die($conn->connect_error);
}

$sql = 'select * from applies';

$result = $conn->query($sql);

var_dump($result);die;