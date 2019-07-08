<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/25
 * Time: 4:15 AM
 */

namespace IMook;


class Database
{

    private $sql;

    private static $instance;

    /**
     * Database constructor.
     * @param $instance
     */
    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    static function getInstance()
    {
        if( self::$instance ){
            return self::$instance;
        }
        var_dump('create instance database by singleton');
        self::$instance = new self();
        return self::$instance;
    }


    function where($where)
    {
        $this->sql .= " ".$where;
        return $this;
    }

    function order($order)
    {
        $this->sql .= " ".$order;
        return $this;
    }

    function limit($limit)
    {
        $this->sql .= " ".$limit;
        return $this;
    }

    function select()
    {
        var_dump($this->sql);
    }

}