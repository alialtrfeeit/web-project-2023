<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn, "utf8");



 // POST the form data

$gender = $_POST['gender'];
$studentsname = $_POST['students_name'];
$FathersName = $_POST['Fathers_Name'];
$Grandfathername = $_POST['Grandfather_name']; 
$Fathersgrandfathersname = $_POST['Fathers_grandfathers_name'];
$Title = $_POST['Title'];
$maritalstatus = $_POST['marital_status'];
$ID_Number = $_POST['ID_Number'];
$Name_of_circle_people = $_POST['Name_of_circle_people']; 
$Record = $_POST['Record'];
$newspaper = $_POST['newspaper'];
$National_card_number = $_POST['National_card_number'];
$Residence_card_number = $_POST['Residence_card_number'];
$birth_date = $_POST['birth_date']; 
$place_of_birth = $_POST['place_of_birth'];
$Governorate = $_POST['Governorate'];
$Judiciary = $_POST['Judiciary'];
$alnaheea = $_POST['alnaheea'];
$nearest_function_point = $_POST['nearest_function_point']; 
$Chosen_name = $_POST['Chosen_name'];
$Student_phone_number = $_POST['Student_phone_number'];
$Phone_number_of_the_students_guardian = $_POST['Phone_number_of_the_students_guardian'];
$College_department	 = $_POST['College_department'];
$stage = $_POST['stage']; 
$result = $_POST['result'];
$study = $_POST['study'];
$Type_of_study = $_POST['Type_of_study'];
$Classify_the_study = $_POST['Classify_the_study'];
 
$sql = "INSERT INTO  mor_info ( gender , students_name , Fathers_Name , Grandfather_name   , 
                	Fathers_grandfathers_name ,Title ,
                marital_status ,ID_Number , Name_of_circle_people , Record , newspaper ,
                 National_card_number , Residence_card_number , birth_date , place_of_birth , 
                 Governorate , Judiciary , alnaheea ,nearest_function_point , Chosen_name ,
                  Student_phone_number , Phone_number_of_the_students_guardian , College_department ,
                  stage , result , study , Type_of_study , Classify_the_study  )
         VALUES ( '$gender' , '$studentsname', '$FathersName'  , '$Grandfathername' ,
         '$Fathersgrandfathersname' ,'$Title' , '$maritalstatus','$ID_Number',
         '$Name_of_circle_people' ,'$Record' , '$newspaper', '$National_card_number' ,
         '$Residence_card_number' ,'$birth_date', '$place_of_birth' , '$Governorate' , '$Judiciary' ,
           '$alnaheea' , '$nearest_function_point' , '$Chosen_name' , '$Student_phone_number' , 
           '$Phone_number_of_the_students_guardian' , '$College_department' , '$stage' , '$result' , '$study' ,
            '$Type_of_study' , '$Classify_the_study'); ";

 

//check sql process
if (mysqli_multi_query($conn, $sql)) {
  

 
echo "<script>alert('add information successful')</script>";
 header("refresh:2;url = registration2.html");
 exit;

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>