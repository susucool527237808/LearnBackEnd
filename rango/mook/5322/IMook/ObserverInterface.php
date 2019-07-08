<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/12
 * Time: 3:34 AM
 */

namespace IMook;


interface ObserverInterface
{

    public function update($event_info=null);

}