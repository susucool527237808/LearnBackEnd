 <?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/24
 * Time: 6:10 PM
 */

//define('BASEDIR',__DIR__);
//function autoload($class){
//    require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
//}
//spl_autoload_register('autoload');

define('BASEDIR',__DIR__);
require BASEDIR.'/IMook/Loader.php';
spl_autoload_register('\\IMook\\Loader::autoload');


//$user = new \IMook\User(1);
//
//$user->mobile = "1838108276x";
//$user->name = 'susucoolx';
//$user->regtime = date("Y-m-d H:i:s");


// 直接new
//$canvas = new \IMook\Canvas();
//$canvas->init();
//$canvas->rect(3,6,4,12);
//$canvas->draw();
//
//echo '===================<br/>';
//
//$canvas2 = new \IMook\Canvas();
//$canvas2->init();
//$canvas2->rect(1,4,6,12);
//$canvas2->draw();

// 原型模式 clone
$canvas = new \IMook\Canvas();
$canvas->init();

$canvas1 = clone $canvas;
$canvas1->rect(3,6,4,12);
$canvas1->draw();
echo '===================<br/>';
$canvas2 = clone $canvas;
$canvas2->rect(1,3,5,12);
$canvas2->draw();