<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/14
 * Time: 1:28 PM
 */

namespace IMook;


interface CanvasDrawDecoratorInterface
{

    public function beforeDraw();

    public function afterDraw();

}