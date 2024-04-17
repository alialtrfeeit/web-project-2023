<?php
 $servername = "localhost:3306";   
 $username = "root";
 $password = "";
 $db = "shms";

$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8mb4");

 


  $id= $_GET['id'];
  $result = mysqli_query($conn , "DELETE FROM mor_info WHERE ID = $id");
  header("Location:registration2.php");
?>