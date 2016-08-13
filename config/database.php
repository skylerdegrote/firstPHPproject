<?php


$databasehost='localhost';
$databaseuser='root';
$databasepassword='root';
$db=new mysqli($databasehost,$databaseuser,$databasepassword);
if($db->connect_errno){
    die('Could not connect database');
}










?>