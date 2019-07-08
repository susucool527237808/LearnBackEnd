<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/30
 * Time: 8:31 AM
 */

namespace IMook;


interface IDatabaseInterface
{

    public function connect($host, $user, $password, $dbname);

    public function query($sql);

    public function close();


}