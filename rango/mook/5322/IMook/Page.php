<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/31
 * Time: 5:43 PM
 */

namespace IMook;


class Page
{

    private $strategy;

    public function index()
    {
        echo "AD:";
        $this->strategy->showAd();
        echo "Category:";
        $this->strategy->showCategory();
    }

    public function setStrategy(UserStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

}