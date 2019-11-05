<?php
/**
 * Created by PhpStorm.
 * User: susucool(527237808@qq.com)
 * Date: 2018/10/19
 * Time: 14:43
 */
namespace pdo;

try {
    $user = 'root';
    $pass = 'root';
    $dbh = new \PDO('mysql:host=localhost;dbname=mysql', $user, $pass, array(
        \PDO::ATTR_PERSISTENT => true
    ));
    foreach($dbh->query('SELECT * from db') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch ( PDOException $e ){
    print "Error!: ".$e->getMessage()."<br/>";
    die();
}