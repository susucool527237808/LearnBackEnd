<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/27
 * Time: 4:06 AM
 */

namespace IMook;

final class Factory
{

    static function createDatabase()
    {
        var_dump('create database by factory');
//        $db = new Database();
        $db = Database::getInstance();
        Register::set('db',$db);
        return $db;
    }

}