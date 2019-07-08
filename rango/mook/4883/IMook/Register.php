<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/29
 * Time: 3:32 AM
 */

namespace IMook;


class Register
{

    protected static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

}