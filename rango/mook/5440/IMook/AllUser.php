<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/14
 * Time: 4:37 PM
 */

namespace IMook;

use IMook\Database\MySQLi;

class AllUser implements \Iterator
{

    protected $ids = [];

    protected $data = [];

    protected $index;

    /**
     * AllUser constructor.
     */
    public function __construct()
    {
        $db = new MySQLi();
        $db->connect('laradock_mysql_1','root','root','test');
        $res = $db->query("select id from user");
        $this->ids = $res->fetch_all(MYSQLI_ASSOC);
    }

    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);

    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    public function rewind()
    {
        $this->index = 0;
    }

}