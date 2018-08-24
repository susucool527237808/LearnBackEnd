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
use turn\classmap\lib\src\B;
use turn\my_library\A as MyLibraryA;
use turn\other_library\A as OtherLibraryA;
use turn\classmap\lib\src\A as ClassmapLibSrcA;

$uuid1 = Uuid::uuid1();
echo $uuid1->toString();

echo "<br>";

new MyLibraryA();
new OtherLibraryA();
new ClassmapLibSrcA();
new B();
$var = 1;
echo '\"$var<br>';
echo "\"$var<br >";