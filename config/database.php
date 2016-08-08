<?php


$databasehost='localhost';
$databaseuser='write-it';
$databasepassword='writeitapp';
$db=new mysqli($databasehost,$databaseuser,$databasepassword);
if($db->connect_errno){
    die('Could not connect database');
}










?>