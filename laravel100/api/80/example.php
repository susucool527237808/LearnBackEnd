<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/12
 * Time: 11:33
 */

trait Sellable {
    protected $price = 0;

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}

class Product {
    protected  $brand;

    /**
     * Product constructor.
     * @param $brand
     */
    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

}

class TV extends Product {
    use Sellable;


    /**
     * TV constructor.
     */
    public function __construct($brand)
    {
        parent::__construct($brand);
    }

    public function play(){
        echo "一台 {$this->brand} 电视在播放中...<br>";
    }
}

class Computer extends Product {
    use Sellable;

    protected $cores = 8;

    /**
     * Computer constructor.
     */
    public function __construct($brand)
    {
        parent::__construct($brand);
    }


    public function getNumberOfCores(){
        return $this->cores;
    }

    public function play(){
        echo "一台 {$this->brand} 电脑正在计算积分中，一共{$this->getNumberOfCores()}积分...<br>";
    }
}

class Gift extends Product {
    protected $name;

    /**
     * Gift constructor.
     * @param $name
     */
    public function __construct($brand, $name)
    {
        parent::__construct($brand);
        $this->name = $name;
    }

}

$tv = new TV('东芝');
$tv->play();
$computer = new Computer('外星人');
$computer->play();
