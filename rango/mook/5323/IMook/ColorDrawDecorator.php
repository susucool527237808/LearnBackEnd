<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/14
 * Time: 1:34 PM
 */

namespace IMook;


class ColorDrawDecorator implements CanvasDrawDecoratorInterface
{

    private $color;

    /**
     * ColorDrawDecorator constructor.
     * @param $color
     */
    public function __construct($color='red')
    {
        $this->color = $color;
    }


    public function beforeDraw()
    {
        echo "<div style='color: {$this->color}'>";
    }

    public function afterDraw()
    {
        echo "</div>";
    }

}