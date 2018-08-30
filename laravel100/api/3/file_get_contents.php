<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/30
 * Time: 10:47
 */

$context = stream_context_create([
    'http' => [
        'protocol_version' => 1.1,
        'header' => [
            'Connection: close',
        ],
    ],
]);
$wx_img_uri = "http://thirdwx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0";
$file = file_get_contents($wx_img_uri,false,$context);
//使用图片头输出浏览器
header("Content-Type: image/jpeg;text/html; charset=utf-8");
echo $file;
exit;