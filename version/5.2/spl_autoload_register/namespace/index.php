<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/23
 * Time: 15:45
 */

////定义当前的目录绝对路径
////加载这个文件
require dirname(__FILE__) . '/AutoLoading/loading.php';

spl_autoload_register("\\AutoLoading\\loading::autoload");

//定位到Lib目录下的Name.php
//Lib\Name::test();
//定位到App目录下Android目录下的Name.php
App\Android\Name::test();
App\Android\Name::test();
//定位到App目录下Ios目录下的Name.php
App\Ios\Name::test();
