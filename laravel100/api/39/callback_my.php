<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/19
 * Time: 17:24
 */

class Model {

    private $event = array();

    public function bind($event_name, $event_handle){ // 绑定方法
        $this->event[$event_name] = $event_handle;
    }

    public function exec($event_name, $event_params){ // 执行方法
        call_user_func_array($this->event[$event_name], $event_params);
    }

}


$model = new Model();
$model->bind('insert', function($sql=null){
    echo "the insert sql is: $sql";
    echo "<br>";
});
$model->exec('insert', array('insert into table_name'));