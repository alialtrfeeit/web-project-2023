<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, "utf8");



 // POST the form data

$studentname = $_POST['students_name'];
$Sectornumber = $_POST['Sector_number'];
$roomnumber = $_POST['room_number'];
$MaintenanceType = $_POST['Maintenance_Type'];
$notes = $_POST['Notes'];
//sql query
$sql = "INSERT INTO  maintenance2 ( students_name , Sector_number , room_number ,  Maintenance_Type , Notes )
         VALUES ( '$studentname' , '$Sectornumber' , '$roomnumber' , '$MaintenanceType' , '$notes'); ";

// $sql .= "INSERT INTO login  (email, passwordd)
//         SELECT  email ,  password FROM sign_as_employee
//         WHERE email = '$email' AND  password = '$password'; ";

//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

//  header("location:refesh managment.html");
//  exit;
echo "<script>alert('add information successful')</script>";
 header("refresh:2;url = Maintenance2.html");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>