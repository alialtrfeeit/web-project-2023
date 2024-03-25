<?php
$servername = "localhost";   
$username = "root";
$password = "";
$dbname = "shms";

 
$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE registration (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(50) NOT NULL,
    status VARCHAR(50) NOT NULL,
    more_information VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table registration created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
