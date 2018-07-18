<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/7/18
 * Time: 11:25
 */

$data = [
    ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 'twenties'],
    ['first_name' => 'Fred', 'last_name' => 'Ali', 'age' => 'thirties'],
    ['first_name' => 'Alex', 'last_name' => 'Cho', 'age' => 'thirties'],
];

// 依据姓氏排序
usort($data, function ($item1, $item2) {
    return $item1['last_name'] <=> $item2['last_name'];
});

// 依据年龄范围分组
$new_data = [];

foreach ($data as $key => $item) {
    $new_data[$item['age']][$key] = $item;
}

ksort($new_data, SORT_NUMERIC);

// 从年龄为 30 岁组里获取用户全名
$result = array_map(function($item) {
    return $item['first_name'].' '.$item['last_name'];
}, $new_data['thirties']);

// 将数组转换为字符串并以行分隔符分隔
$final = implode("\n", $result);

var_dump($new_data);

var_dump($result);

var_dump($final);