<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/31
 * Time: 1:39 PM
 */

namespace IMook\Database;

use IMook\IDatabaseInterface;

class MySQLi implements IDatabaseInterface
{

    private $conn;

    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $this->conn = mysqli_connect($host,$user,$password,$dbname);
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn, $sql);
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }


}