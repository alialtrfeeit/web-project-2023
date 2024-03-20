<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
  mysqli_set_charset($conn, "utf8");

$id= $_GET['id'];
$sql = "SELECT * FROM  maintenance2 WHERE id= ".$id ;
$result = $conn->query($sql);
$row = $result->fetch_assoc()

  ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <title>Maintenance</title>
    <link rel="stylesheet" type="text/css" href="Maintenance.css">
</head>

<body>

    <div dir="rtl" class="image-container"><img src="  imeges/images.png" alt="">

        <h3>
            قسم شؤون الاقسام الداخلية
        </h3>
    </div>

    <header>

        <nav dir="rtl">
            <ul>
                <li><a href=" home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.php">الادارة</a></li>
                <li><a href="registration2.html">التسجيل</a></li>
                <li><a href="equip2 (2).php">التجهيز</a></li>
                <li><a style="background-color: #bab5b5;" href=" Maintenance2.php">الصيانة</a></li>

            </ul>
        </nav>
        <hr>

    </header>


    <div class="container" dir="rtl">
        <h4>استمارة الصيانة </h4>

        <form action=" Maintenance2.php" method="POST">

            <label>اسم الطالب</label>
            <input type="text" id="text" name="students_name" value="<?=$row['students_name'] ?>">
            <label>      رقم القطاع</label>
            <input type="text" name="Sector_number" value="<?=$row['Sector_number'] ?>">
            <label>       رقم الغرفة</label>
            <input type="text" name="room_number"  value="<?=$row['room_number'] ?>">
            <label>    نوع الصيانة</label>
            <input type="text" name="Maintenance_Type"  value="<?=$row['Maintenance_Type'] ?>">
            <label>      الملاحظات</label>
            <input type="text" name="Notes" value="<?=$row['Notes'] ?>" >
            <input type="submit" name="submit" value=" تعديل">
        </form>
    </div>
</body>
</html>
<?php
 include('config.php');

$conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset("utf8mb4");

if (isset ($_POST['submit'])){
$_studentsname    = $_POST['students_name'];
$_Sectornumber    = $_POST['Sector_number'];
$_roomnumber      = $_POST['room_number'];
$_MaintenanceType = $_POST['Maintenance_Type'];
$_Notes           = $_POST['Notes'];
 
$sql2="UPDATE maintenance2 SET students_name='$_studentsname' , Sector_number='$_Sectornumber' 
      room_number='$_roomnumber' ,Maintenance_Type='$_MaintenanceType' ,Notes='$_Notes' WHERE id ='$id' ";
 $conn->query($sql2);
 if ($conn->query($sql2) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
     $conn->close();
?>