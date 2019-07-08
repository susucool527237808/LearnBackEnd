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

//$db1 = IMook\Factory::createDatabase();
//$db1->where('id=1')->select();
//$db2 = IMook\Factory::createDatabase();
//$db2->where('name=2')->limit(3)->select();
//
//
//Imook\Database::getInstance()->where('id=3')->select();
//Imook\Database::getInstance()->where('id=2')->limit(1)->select();
//Imook\Database::getInstance()->where('id=1')->limit(3)->select();

//$db1 = IMook\Factory::createDatabase();
//$db1->where('a=2')->select();
//$db2 = IMook\Register::get('db');
//$db2->where('b=2')->select();


//$db1 = new \IMook\Database\MySQL();
//$db1->connect('127.0.0.1','root','root','mysql');
//var_dump($db1->query('show databses'));
//$db1->close();

$db2 = new \IMook\Database\MySQLi();
$db2->connect('laradock_mysql_1','root','root','mysql');
var_dump($db2->query('show databases'));
$db2->close();

$db3 = new \IMook\Database\PDO();
$db3->connect('127.0.0.1','root','root','mysql');
var_dump($db3->query('show databases'));
$db3->close();
