<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/1
 * Time: 4:30 AM
 */

namespace IMook;


use IMook\Database\MySQLi;

class User
{

    static public $id,$name,$mobile,$regtime;

    private $db;

    /**
     * User constructor.
     * @param $id
     */
    public function __construct($id)
    {
        var_dump('new user');
        $this->id = $id;
        $this->db = new MySQLi();
        $this->db->connect('127.0.0.1','root','root','test');
        $res = $this->db->query("select * from user limit 1");
        $data = $res->fetch_assoc();

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        var_dump('destruct user');
        $this->db->query("update user set name='{$this->name}',mobile='{$this->mobile}',regtime='{$this->regtime }'");
    }

}