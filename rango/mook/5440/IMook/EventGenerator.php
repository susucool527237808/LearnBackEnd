<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/12
 * Time: 3:29 AM
 */

namespace IMook;


abstract class EventGenerator
{

    private $observers = [];

    public function addObserver(ObserverInterface $observer)
    {

        $this->observers[] = $observer;

    }

    public function noyify()
    {
        foreach ( $this->observers as $observer ){
            $observer->update('666');
        }
    }

}