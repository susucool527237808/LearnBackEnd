<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/9/19
 * Time: 14:29
 * Refer: http://www.cnitblog.com/CoffeeCat/archive/2009/04/21/56541.html
 */

/*全局函数的回调*/
//function fnCallBack( $msg1, $msg2 ){
//    echo 'msg1:'.$msg1;
//    echo '<br>';
//    echo 'msg2:'.$msg2;
//}
//$fnName = 'fnCallBack';
//$params = array('hello', 'world');
//call_user_func_array($fnName, $params);

/*类的静态方法的回调*/
//class MyClass {
//    public static function fnCallBack( $msg1, $msg2 ){
//        echo 'msg1:'.$msg1;
//        echo '<br>';
//        echo 'msg2:'.$msg2;
//    }
//}
//$className = 'MyClass';
//$fnName = 'fnCallBack';
//$params = array('hello', 'world');
//call_user_func_array(array($className,$fnName),$params);

/*类的非静态方法的回调 会遇到deprecated警告 */
//class MyClass {
//    public function fnCallBack( $msg1, $msg2 ){
//        echo 'msg1:'.$msg1;
//        echo '<br>';
//        echo 'msg2:'.$msg2;
//    }
//}
//$className = 'MyClass';
//$fnName = 'fnCallBack';
//$params = array('hello', 'world');
//call_user_func_array(array($className,$fnName),$params);

/*类的非静态方法的回调 类中有属性 会遇到deprecated警告 并且 有致命错误 提示$this没有在对象环境下出现 */
//class MyClass {
//    private $name = 'abc';
//    public function fnCallBack( $msg1, $msg2 ){
//        echo 'object name:'.$this->name;
//        echo '<br>';
//        echo 'msg1:'.$msg1;
//        echo '<br>';
//        echo 'msg2:'.$msg2;
//    }
//}
//$className = 'MyClass';
//$fnName = 'fnCallBack';
//$params = array('hello', 'world');
//call_user_func_array(array($className,$fnName),$params);

/*自己实现匿名函数调用 */
//class MyClass
//{
//    private $name = 'abc';
//    public function fnCallBack( $msg1 = 'default msg1' , $msg2 = 'default msg2' )
//    {
//        echo 'object name:'.$this->name;
//        echo "<br />\n";
//        echo 'msg1:'.$msg1;
//        echo "<br />\n";
//        echo 'msg2:'.$msg2;
//    }
//}
//$myobj = new MyClass();
//$fnName = 'fnCallBack';
//$params = array('hello', 'world');
//function anonymous(){
//    global $myobj;
//    global $fnName;
//    global $params;
//    $myobj->$fnName($params[0],$params[1]);
//}
//anonymous();

/*自己实现匿名函数调用 */
class MyClass
{
    private $name = 'abc';
    public function fnCallBack( $msg1 = 'default msg1' , $msg2 = 'default msg2' )
    {
        echo 'object name:'.$this->name;
        echo "<br />\n";
        echo 'msg1:'.$msg1;
        echo "<br />\n";
        echo 'msg2:'.$msg2;
    }
}
$myobj = new MyClass();
$fnName = 'fnCallBack';
$params = array('hello', 'world');
$strParams = '';
$strCode = 'global $myobj;global $fnName;global $params;$myobj->$fnName(';
for ( $i = 0 ; $i < count( $params ) ; $i ++ )
{
    $strParams .= ( '$params['.$i.']' );
    if ( $i != count( $params )-1 )
    {
        $strParams .= ',';
    }
}
$strCode = $strCode.$strParams.");";
$anonymous = create_function( '' , $strCode);
$anonymous();