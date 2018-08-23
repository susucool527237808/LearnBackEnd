<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 17:07
 */
require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;


$uuid1 = Uuid::uuid1();
echo $uuid1->toString();