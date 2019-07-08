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

    static function getUser($id)
    {
//        $user = new User($id);
//        return $user;
        $key = 'user_'.$id;
        $user = Register::get($key);
        if( !$user ){
            $user = new User($id);
            Register::set($key,$user);
        }
        return $user;
    }

}