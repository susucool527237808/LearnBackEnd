<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/30
 * Time: 8:36 AM
 */

namespace IMook\Database;

use IMook\IDatabaseInterface;

class MySQL implements IDatabaseInterface
{

    protected $conn;

    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        mysql_connect($host, $user, $password);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }


}