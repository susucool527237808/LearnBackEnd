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
        $user->name = 'rango7x';
        $this->test();
    }

    public function test()
    {
        $user = \IMook\Factory::getUser(1);
        $user->mobile = "1838108297x";
    }

}

//$page = new Page();
//$page->index();
//$page->test();


class Event extends \IMook\EventGenerator
{

    public function trigger()
    {
        var_dump('Event');

        // update
//        var_dump('logic 1');
//        var_dump('logic 2');
//        var_dump('logic 3');
        $this->noyify();
    }

}

class Observer1 implements \IMook\ObserverInterface
{
    public function update($event_info = null)
    {
        var_dump($event_info);
        var_dump('logic 1');
    }

}

class Observer2 implements \IMook\ObserverInterface
{
    public function update($event_info = null)
    {
        var_dump($event_info);
        var_dump('logic 2');
    }

}

class Observer3 implements \IMook\ObserverInterface
{
    public function update($event_info = null)
    {
        var_dump('end');
    }
}



$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->addObserver(new Observer3());
$event->trigger();