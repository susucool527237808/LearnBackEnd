<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/31
 * Time: 1:45 PM
 */

namespace IMook\Database;

use IMook\IDatabaseInterface;

class PDO implements IDatabaseInterface
{

    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$password);

    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $res =  $this->conn->query($sql);
        $res_arr = [];
        while ($row = $res->fetch()){
            $res_arr[] = $row;
        }
        return $res_arr;
    }

    public function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }


}