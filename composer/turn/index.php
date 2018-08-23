<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 17:07
 */
namespace turn;
require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use turn\my_library\A;

$uuid1 = Uuid::uuid1();
echo $uuid1->toString();

echo "<br>";

$a = new A();