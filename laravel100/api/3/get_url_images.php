<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/30
 * Time: 17:04
 */

$wx_img_uri = "https://www.bilibili.com/";
$image_array = getImgs(curl_get($wx_img_uri));
foreach($image_array as $v){
    save_image($v,rand(1000,10000).".jpg");
//    var_dump($v);
}


function getImgs($content,$order='ALL'){
    $pattern="/<img.*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/";
    preg_match_all($pattern,$content,$match);
    if(isset($match[1])&&!empty($match[1])){
        if($order==='ALL'){
            return $match[1];
        }
        if(is_numeric($order)&&isset($match[1][$order])){
            return $match[1][$order];
        }
    }
    return '';
}

// 自己模仿写的 常规curl
function curl_get($url){
    // 初始化
    $curl = curl_init();

    // 设置参数
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // 执行
    $output = curl_exec($curl);

    // 关闭
    curl_close($curl);

    // 返回取得的数据
    return $output;
}


// 下载文件 site:https://segmentfault.com/a/1190000006220620
function save_image($url, $save_name){
    $ch = curl_init();

    $fp=fopen('./downloads/'.$save_name, 'w');

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FILE, $fp);

    $output = curl_exec($ch);
    $info = curl_getinfo($ch);

    fclose($fp);

    $size = filesize('./downloads/'.$save_name);
    if ($size != $info['size_download']) {
        echo "下载的数据不完整，请重新下载<br>";
    } else {
        echo "下载数据完整<br>";
    }

    curl_close($ch);
}