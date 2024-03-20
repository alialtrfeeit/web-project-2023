<?php
include('config.php');


// Create connection

$conn = mysqli_connect($servername, $username, $password, $db);
  mysqli_set_charset($conn, "utf8");

$id= $_GET['id'];
$sql = "SELECT * FROM  equip2 WHERE id= ".$id ;
$result = $conn->query($sql);
$row = $result->fetch_assoc()

  ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <title>equip</title>
    <link rel="stylesheet" type="text/css" href="equip.css">
</head>

<body>

    <div dir="rtl" class="image-container"><img src="imeges/images.png" alt="">

        <h3>
            قسم شؤون الاقسام الداخلية
        </h3>
    </div>

    <header>

        <nav dir="rtl">
            <ul>
                <li><a href="home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.php">الادارة</a></li>
                <li><a href="registration2.html">التسجيل</a></li>
                <li><a style="background-color: #bab5b5;" href="equip2 (2).php">التجهيز</a></li>
                <li><a href="Maintenance2.php">الصيانة</a></li>

            </ul>
        </nav>
        <hr>

    </header>


    <div class="container" dir="rtl">
        <h4>استمارة التجهيز </h4>

        <form action="equip2.php" method="post">

            <label>اسم المادة</label>
            <input type="text" id="text" name="Subject_Name" value="<?=$row['Subject_Name'] ?>">


            <label>    عدد المواد</label>
            <input type="text" name="Number_of_materials"  value="<?=$row['Number_of_materials'] ?>">
            


            <label>    نوع الصيانة</label>
            <input type="text" name="Maintenance_Type" value="<?=$row['Maintenance_Type'] ?>">
            


            <label>   مسؤول الصيانة</label>
            <input type="text" id="text" name="maintenance_manager" value="<?=$row['maintenance_manager'] ?>">


            <label>      الملاحظات</label>
            <input type="text" name="Notes" value="<?=$row['Notes'] ?>">


            <input type="submit" name="submit" value="تعديل">



        </form>
    </div>
</body>

</html>



<?php
 include('config.php');

$conn = new mysqli($servername, $username, $password, $db);
    $conn->set_charset("utf8mb4");

if (isset ($_POST['submit'])){
$Subject_Name    = $_POST['Subject_Name'];
$maintenance_manager    = $_POST['maintenance_manager'];
$Maintenance_Type      = $_POST['Maintenance_Type'];
$Number_of_materials = $_POST['Number_of_materials'];
$Notes           = $_POST['Notes'];
 
$sql2="UPDATE equip2 SET Subject_Name='$Subject_Name' , maintenance_manager='$maintenance_manager' 
      Maintenance_Type='$Maintenance_Type' ,Number_of_materials='$Number_of_materials' ,Notes='$Notes' WHERE id ='$id' ";
 $conn->query($sql2);
 if ($conn->query($sql2) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
     $conn->close();
?>