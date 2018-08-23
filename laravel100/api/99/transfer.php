<?php
namespace laravel100\api;

/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 18:17
 * Link: https://www.jianshu.com/p/25a78620fa5c
 */

class Transfer {

    public function __call ( $name , $arguments )
    {
        // TODO: Implement __call() method.
        $builder = new Builder();
        return call_user_func_array([$builder, $name], $arguments);
    }

    public static function __callStatic ( $name , $arguments )
    {
        // TODO: Implement __callStatic() method.
        $instance = new static;
        return call_user_func_array([$instance, $name], $arguments);
    }

}

class Builder {

    protected $from = 0;

    protected $to = 0;

    protected $amount = 0;

    protected $comments = 0;

    protected $related = [];

    public function from($user){
        $this->from = $user;
        return $this;
    }

    public function to($user){
        $this->to = $user;
        return $this;
    }
    public function amount(int $amount){
        $this->amount = $amount;
        return $this;
    }
    public function comments($comments){
        $this->$comments;
        return $this;
    }
    public function related(int $type, int $id, $extra = null){
        $this->related = array(
            'type'=>$type,
            'id'=>$id,
            'extra'=>$extra
        );
        return $this;
    }

    public function transfer(){
        echo 'begin transfer: from '.$this->from.', to '.$this->to.',amount is '.$this->amount.', comments is '.$this->comments;
        echo ' ,related is '.serialize($this->related).'.';
    }

}

$transfer = Transfer::from('张三')->to('李四')->transfer();




