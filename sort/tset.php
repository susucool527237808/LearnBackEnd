<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/16
 * Time: 11:13
 */
$count = 100;
for ($i = 1; $i <= 100; $i++) {
    usleep(50000);
    printf("\r [%-100s] (%2d%%/%2d%%)", str_repeat("=", $i) . ">", ($i / $count) * 100, $count);
}