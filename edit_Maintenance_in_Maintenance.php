<?php
include_once "config.php";

// Fetching the ID of the record to be edited
$id = $_GET['id'];

// Fetching the record from the database based on the ID
$sql = mysqli_query($conn, "SELECT * FROM maintenance2 WHERE id = $id");
$row = mysqli_fetch_assoc($sql);

// Handling form submission for editing
if(isset($_POST['submit'])) {
    // Extracting form data
    extract($_POST);

    
    $_studentsname = $_POST['_studentsname'];
    $_Sectornumber = $_POST['_Sectornumber'];
    $_roomnumber = $_POST['_roomnumber'];
    $_MaintenanceType = $_POST['_MaintenanceType'];
    $_Notes = $_POST['Notes'];
        
    // Updating the record in the database
    $sql = mysqli_query($conn, "UPDATE maintenance2 SET students_name = '$_studentsname', 
                        Sector_number = '$_Sectornumber', room_number = '$_roomnumber', 
                        Maintenance_Type = '$_MaintenanceType', Notes = '$_Notes' WHERE id = $id");
    
    // Redirecting back to the maintenance page after update
    if($sql) {
        header("location: managment.php");
        exit; // Ensure script execution stops after redirection
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
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
    <div dir="rtl" class="image-container">
        <img src="imeges/images.png" alt="">
        <h3>قسم شؤون الاقسام الداخلية</h3>
    </div>

    <header>
        <nav dir="rtl">
            <ul>
                <li><a href="home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.php">لوحةالطلبات</a></li>
                <li><a href="registration2.php">التسجيل</a></li>
                <li><a href="equip2 (2).php">التجهيز</a></li>
                <li><a style="background-color: #bab5b5;" href="Maintenance2.php">الصيانة</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <div class="container" dir="rtl">
        <h4>استمارة الصيانة </h4>
        <form action="" method="POST">
            <label>اسم الطالب</label>
            <input type="text" id="text" name="_studentsname" value="<?=$row['students_name'] ?>">
            <label>رقم القطاع</label>
            <input type="text" name="_Sectornumber" value="<?=$row['Sector_number'] ?>">
            <label>رقم الغرفة</label>
            <input type="text" name="_roomnumber"  value="<?=$row['room_number'] ?>">
            <label>نوع الصيانة</label>
            <input type="text" name="_MaintenanceType"  value="<?=$row['Maintenance_Type'] ?>">
            <label>الملاحظات</label>
            <textarea name="Notes"><?=$row['Notes']?></textarea>
            <input type="submit" name="submit" value="تعديل">
        </form>
    </div>
</body>
</html>
