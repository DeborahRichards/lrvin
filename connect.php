<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "fliptherapy";


$connection = mysqli_connect($host,$user,$password,$db);

if(!$connection){
    echo "connection was not established";
}else{
    echo "connection was established";
}

?>
