<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 14:51
 */

class A {

    public function __construct (){
        echo "This is A construct<br>";
    }

}

class B extends A {

    public function __construct (){
        parent::__construct();
        echo "This is B construct<br>";
    }

}

class C extends B {

    public function __construct (){
        echo "This is C construct<br>";
    }

}

new A();
new B();
new C();