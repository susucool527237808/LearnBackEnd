<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/24
 * Time: 6:14 PM
 */
namespace IMook;

class Object
{
    private $array = [];

    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        var_dump(__METHOD__);
        $this->array[$name] = $value;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
        var_dump(__METHOD__);
        return $this->array[$name];
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name, $arguments);
        return 'magic __call function';
    }

    static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name, $arguments);
        return 'magic __callStatic function';
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    function __invoke($arguments)
    {
        // TODO: Implement __invoke() method.
        var_dump($arguments);
        return 'magic __invoke';
    }
}