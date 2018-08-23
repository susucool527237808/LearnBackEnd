<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 15:27
 */
class Person {

    public $name;

    public function getName(){
        echo $this->name;
    }

}

$p = new Person();
$p2 = new Person();
$p->name = '小红<br>';
$p2->name = '小明<br>';
$p->getName(); //小红
$p2->getName(); //小明