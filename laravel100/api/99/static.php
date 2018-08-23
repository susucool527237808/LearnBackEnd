<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 16:30
 */

class A {

    public function say() {
        echo 'A<br>';
    }

    public function saySelf() {
        self::say();
    }

    public function sayStatic() {
        static::say();
    }

}

class B extends A {
    public function say() {
        echo "B<br>";
    }
}

$b = new B();
$b->say();
$b->saySelf();
$b->sayStatic();


class Person
{
    public static function name()
    {
        echo "person<br>";
    }
    public static function callself()
    {
        self::name();
    }

    public static function callstatic()
    {
        $instance = new static;
        $instance->name();
    }
}

class Man extends Person
{
    public static function name()
    {
        echo "man<br>";
    }
}
Man::name();  // output： man
Person::callself();  // output： person
Person::callstatic();  // output：person
Man::callself();  // output： person
Man::callstatic();  // output：man