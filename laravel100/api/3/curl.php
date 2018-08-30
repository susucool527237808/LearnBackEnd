<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/30
 * Time: 15:27
 */
//$wx_img_uri = "http://thirdwx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0";
//$output = curl_2($wx_img_uri);
//header("Content-Type: image/jpeg;text/html; charset=utf-8");
//echo $output;

//$wx_img_uri = "http://thirdwx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0";
//save_image($wx_img_uri,time().".jpg");

$wx_img_uri = "http://thirdwx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/0";
header("Content-Type: image/jpeg;text/html; charset=utf-8");
print_r(curl_get($wx_img_uri));


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


// 常规curl请求 site:https://segmentfault.com/a/1190000006220620
function curl_1($url){
    // 初始化
    $curl = curl_init();

    //设置选项，包括URL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($curl);

    //执行并获取HTML文档内容
    curl_close($curl);

    return $output;
}

//使用curl请求HTTPS site:https://segmentfault.com/a/1190000006220620
function curl_2($url){
    // 初始化
    $curl = curl_init();

    //设置选项，包括URL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // https请求 不验证证书和hosts
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

    // 从证书中检查SSL加密算法是否存在(默认不需要验证）
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

    $output = curl_exec($curl);

    //执行并获取HTML文档内容
    curl_close($curl);

    return $output;
}

// 使用curl请求HTTPS 加强版 site:https://segmentfault.com/a/1190000006220620
function curl_https($url, $data=array(), $header=array(), $timeout=30, $debug=false){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // 从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

    $response = curl_exec($ch);

    if($error=curl_error($ch)){
        die($error);
    }

    // 打印错误信息
    if($debug)
    {

        echo '=====info====='."\r\n";
        print_r( curl_getinfo($ch) );

        echo '=====error====='."\r\n";
        print_r( curl_error($ch) );

        echo '=====$response====='."\r\n";
        print_r( $response );

    }
    curl_close($ch);

    return $response;

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
        echo "下载的数据不完整，请重新下载";
    } else {
        echo "下载数据完整";
    }

    curl_close($ch);
}
