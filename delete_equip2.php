<?php
 $servername = "localhost:3306";   
 $username = "root";
 $password = "";
 $db = "shms";

$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8mb4");

 


  $id= $_GET['id'];
  $result = mysqli_query($conn , "DELETE FROM equip2 WHERE ID = $id");
  header("Location:equip2 (2).php");
?>