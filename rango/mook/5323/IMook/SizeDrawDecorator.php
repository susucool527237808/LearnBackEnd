<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/4/14
 * Time: 1:39 PM
 */

namespace IMook;


class SizeDrawDecorator implements CanvasDrawDecoratorInterface
{

    private $size;

    /**
     * SizeDrawDecorator constructor.
     * @param $size
     */
    public function __construct($size=14)
    {
        $this->size = $size;
    }

    public function beforeDraw()
    {
        echo "<div style='font-size: {$this->size}px'>";
    }

    public function afterDraw()
    {
        echo "</div>";
    }

}