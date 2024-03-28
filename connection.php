<?php

$servername = "localhost";
$username = "root";
$password = "helloworld";
$database = "my_data_base";

$connect = mysqli_connect($servername, $username, $password, $database);

if(!$connect)
{
    die("Connection Error!");
}

?>