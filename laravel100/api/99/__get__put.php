<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/8/21
 * Time: 15:12
 */

class MethodTest {

    private $data = array();

    public function __set ( $name , $value )
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
    }

    public function __get ( $name )
    {
        // TODO: Implement __get() method.
        if( array_key_exists($name, $this->data) ){
            return $this->data[$name];
        } else {
            return null;
        }
    }

}

$methodtest = new MethodTest();
$methodtest->a = 'this is a';
$methodtest->b = 'this is b';
$methodtest->c = array('value'=>'this is c');
var_dump($methodtest);
echo '<br>';
var_dump($methodtest->c);
echo '<br>';
var_dump($methodtest->d);
echo '<br>';


class Animal {

    protected $data;

    protected $username = 'animal';

}

class Penguin extends Animal {

    public function __construct($id) {
        $this->getPenguinFromDb($id);
    }

    public function getPenguinFromDb($id) {
        // elegant and robust database code goes here
        return $this->data = 'the data from datatable->'.$id;
    }

    public function __get($field) {
        if($field == 'name') {
            return $this->username;
        } else {
            if( isset($this->$field) )
                return $this->$field;
            else
                return null;
        }
    }

    public function __set($field, $value) {
        if($field == 'name') {
            $this->username = $value;
        } else {
            $this->$field = $field;
        }
    }

}

$penguin = new Penguin(6);
var_dump($penguin);
echo '<br>';
var_dump($penguin->name);
$penguin->username  = 'penguin';
echo '<br>';
var_dump($penguin->username);
echo '<br>';
var_dump($penguin->a);
echo '<br>';
$penguin->a = 'a';
var_dump($penguin->a);
