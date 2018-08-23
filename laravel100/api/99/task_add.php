<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 11:41
 */

function task_add($run_time, $call_back, $param_arr){

        if(time()>=strtotime($run_time)){
            call_user_func_array($call_back, $param_arr);
        }
}


task_add('2018-8-20 ', 'var_dump', array('666'));

