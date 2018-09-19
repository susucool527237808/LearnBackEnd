<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/19
 * Time: 17:05
 */

class MyClass {
    public $eventMap = array();

    function on($evtname, $handle){
        $this->eventMap[$evtname] = $handle;
    }

    function trigger( $evtname, $scope=null ){
        call_user_func_array($this->eventMap[$evtname], $scope);
    }
}

$MyClass = new MyClass();
$MyClass->on('post', function($a, $b){
    echo " a = $a<br>";
    echo " b = $b<br> ";
    echo " a + b = ".( $a + $b) . "<br> ";
    echo 'post end<br>';
});
$MyClass->trigger('post', array(123,321));

class test{
    static $static = "this is  static ";
    public $nomal = "this is nomal ";
    function demo($a , $b ){
        echo " a = $a <br>";
        echo " b = $b <br>";
        echo " static = ".self::$static." <br>";
        echo " nomal = ".$this->nomal." <br>";
        echo " add = ".$this->add." <br>";
        echo 'test end<br>';
    }
}

$test = new test;
$test->add = " this is new add ";
$MyClass->on('test', array($test, 'demo'));
$MyClass->trigger('test', array('222','333'));