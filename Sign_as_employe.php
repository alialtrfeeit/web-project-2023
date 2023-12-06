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
$previleg = $_POST['previleg'];

//sql query
$sql = "INSERT INTO Sign_as_employee ( ferst_name , last_name , email, password , previleg)
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$previleg');";

$sql .= "INSERT INTO login  (email, passwordd)
        SELECT  email ,  password FROM sign_as_employee
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