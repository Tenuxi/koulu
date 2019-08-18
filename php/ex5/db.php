<?php

$servername= 'localhost';
$database='verkkokauppa';
$username= 'testaaja';
$password= 'salasana';
$server= 'localhost';
$port= 3306;

$connection= mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error())
{
    echo"Failedto connect to MySQL: " . mysqli_connect_error();
} else 

 mysqli_set_charset($connection, 'utf8');




?>