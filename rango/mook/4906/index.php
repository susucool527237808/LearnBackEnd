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

// 策略模式
if($_GET['user'] == 'female'){
    $strategy = new \IMook\Strategy\FemaleUserStrategy();
} else {
    $strategy = new \IMook\Strategy\MaleStartegy();
}
$page = new \IMook\Page();
$page->setStrategy($strategy);
$page->index();
