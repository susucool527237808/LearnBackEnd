<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 10:33
 */

function playVideo($video){
    echo '我正在bilibili看电影：',$video."<br>";
}

function playAudio($audio){
    echo '我正在网易云听音乐：',$audio."<br>";
}

function exe(){
    $args = func_get_args();
    call_user_func_array(array_shift($args),$args);
}

exe('playVideo','《功夫》');

exe('playAudio','《童话镇》');