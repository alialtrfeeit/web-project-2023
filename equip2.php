<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, "utf8");



 // POST the form data

$SubjectName = $_POST['Subject_Name'];
$MaintenanceType = $_POST['Maintenance_Type'];
$maintenancemanager = $_POST['maintenance_manager'];
$Numberofmaterials = isset($_POST['Number_of_materials']) ? $_POST['Number_of_materials'] : null; 
$notes = $_POST['Notes'];
//sql query
$sql = "INSERT INTO  equip2 ( Subject_Name , Maintenance_Type , maintenance_manager , Number_of_materials   , Notes )
         VALUES ( '$SubjectName' , '$MaintenanceType', '$maintenancemanager'  , '$Numberofmaterials' , '$notes'); ";

 
//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

//  header("location:refesh managment.html");
//  exit;
echo "<script>alert('add information successful')</script>";
 header("refresh:1;url =equip2 (2).php");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>