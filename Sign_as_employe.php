<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);



 // POST the form data

$firstname = $_POST['ferst_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$previleg = $_POST['previleg'];




//sql query
$sql = "INSERT INTO Sign_as_employe ( ferst_name , last_name , email, password , previleg)
         VALUES ( '$firstname' , '$lastname' , '$email' , '$password' , '$previleg');";

// $sql .= "INSERT INTO login_tb (email, passwordd)
//         SELECT C_email , C_password FROM client_tb
//         WHERE C_email = '$email' AND C_password = '$password'; ";

//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

 header("location: sign_as_employee.html");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>