<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kantor";
$limit = 5;

$mysqli = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 

session_start();
?>