<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);




if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// collect user input from login form
$email = $_POST['email'];
$password = $_POST['password'];

 $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) == 1) {

  header("location: home.html");
  exit;

}
 else {

  echo '<script>alert("error your data incorrect."); window.location.href = "login.html";</script>';
  // $error_message = "Error: Your login credentials are incorrect.";


}

 
// if (isset($error_message)) {
//     echo '<div class="error-message">' . $error_message . '</div>';
// }
 

 mysqli_close($conn);


?>