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


class  Page
{

    public function index()
    {
        $user = \IMook\Factory::getUser(1);
        $user->name = 'rango8xx';
        $this->test();
    }

    public function test()
    {
        $user = \IMook\Factory::getUser(1);
        $user->mobile = "1838108298xx";
    }

}
$page = new Page();
$res = $page->index();
var_dump($res);
//$page->test();