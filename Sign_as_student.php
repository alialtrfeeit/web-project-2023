<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, "utf8");



 // POST the form data

$firstname = $_POST['ferst_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
 
//sql query
$sql = "INSERT INTO Sign_as_student ( ferst_name , last_name , email, password )
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password');";

$sql .= "INSERT INTO login  (email, passwordd)
        SELECT  email ,  password FROM Sign_as_student
        WHERE email = '$email' AND  password = '$password'; ";

//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

//  header("location:refesh managment.html");
//  exit;
echo "<script>alert('add information successful')</script>";
 header("refresh:2;url = managment.html");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>