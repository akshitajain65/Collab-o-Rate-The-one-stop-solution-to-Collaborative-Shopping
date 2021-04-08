<?php

$hostname= "localhost";
$username="root";
$password="dsa@sem6";

$mysqlconnect=mysqli_connect("$hostname","$username","$password");

if($mysqlconnect===false){
    die("mysql is not connected");
}
else{
    //echo("mysql is connected");
}

$title = 'Items in your wish-list';
$content = "inc/index_content.php";
include "layout/app.php";
?>
