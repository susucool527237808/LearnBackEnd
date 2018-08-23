<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/20
 * Time: 14:48
 */

class Car {

    public static function model(){
        self::getModel();
    }

    protected static function getModel(){
        echo "This is a car model<br>";
    }

}

Car::model();

class Taxi extends Car {

   protected static function getModel ()
   {
       echo "This is a Taxi model<br>";
   }

}

Taxi::model();