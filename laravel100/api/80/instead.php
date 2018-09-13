<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/12
 * Time: 14:10
 */

trait A {
    public function hello(){
        echo 'A<br>';
    }
}

trait B {
    public function hello(){
        echo 'B<br>';
    }
}

class SayHello{
    use A,B {
        A::hello insteadof B;
        B::hello as bhello;
    }
}

$hello = new SayHello();
$hello->hello();
$hello->bhello();