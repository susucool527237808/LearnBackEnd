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

$object = new IMook\Object();

$object->b = 1;
var_dump($object->b);

var_dump($object->test("hell o", 1));
var_dump(IMook\Object::hello('1','2'));

 var_dump((string)$object);
var_dump($object('is invoke param'));