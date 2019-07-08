<?php
/**
 * Created by PhpStorm.
 * User: susucool
 * Date: 2019/3/31
 * Time: 5:38 PM
 */

namespace IMook\Strategy;


use IMook\UserStrategyInterface;

class FemaleUserStrategy implements UserStrategyInterface
{
    public function showAd()
    {
        // TODO: Implement showAd() method.
        var_dump("2019 新款女装");
    }

    public function showCategory()
    {
        // TODO: Implement showCategory() method.
        var_dump("女装");
    }

}