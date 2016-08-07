<?php
/**
 * Created by PhpStorm.
 * User: skylerdegrote
 * Date: 8/6/16
 * Time: 5:21 PM
 */

$databasehost='localhost';
$databaseuser='root';
$databasepassword='database';
$db=new mysqli($databasehost,$databaseuser,$databasepassword);
if($db->connect_errno){
    die('Could not connect database');
}










?>