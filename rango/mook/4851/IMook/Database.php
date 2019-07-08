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
        echo $this->sql;
    }

}