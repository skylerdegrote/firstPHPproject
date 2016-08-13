<?php




$servername = "localhost";
$username = "root";
$password = "root";
$database = "write-it";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "success!";
}








?>






