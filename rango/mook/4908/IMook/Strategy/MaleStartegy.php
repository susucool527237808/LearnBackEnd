<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/31
 * Time: 5:40 PM
 */

namespace IMook\Strategy;

use IMook\UserStrategyInterface;

class MaleStartegy implements UserStrategyInterface
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        var_dump("cpu iphone mac");
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        var_dump("电子产品");
    }

}