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

IMook\Object::test();
App\Controller\Home\Index::test();

$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();

$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");
echo $queue->dequeue();
echo $queue->dequeue();

$heap = new SplMinHeap();
$heap->insert("data1\n");
$heap->insert("data2\n");
echo $heap->extract();
echo $heap->extract();


$fix_array = new SplFixedArray(10);
$fix_array[0] = 0;
$fix_array[9] = 9;
var_dump($fix_array);


$db = new IMook\Database();
$db->where("id=1")->where("name=2")->order("id desc")->limit(10)->select();
