<?php

$servername = "localhost:3306";  //my computer
$username = "root";
$password = "";
$db = "shms";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
 

mysqli_set_charset($conn, "utf8");
?>