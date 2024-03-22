<?php
include_once "config.php";

// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record from the database based on the ID
    $sql = mysqli_query($conn, "SELECT * FROM equip2 WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);

    // Handle form submission for editing
    if(isset($_POST['submit'])) {
        // Extract form data
        $Subject_Name = $_POST['Subject_Name'];
        $maintenance_manager = $_POST['maintenance_manager'];
        $Maintenance_Type = $_POST['Maintenance_Type'];
        $Number_of_materials = $_POST['Number_of_materials'];
        $Notes = $_POST['Notes'];

        // Update the record in the database
        $update_sql = "UPDATE equip2 SET Subject_Name = '$Subject_Name', maintenance_manager = '$maintenance_manager', 
                        Maintenance_Type = '$Maintenance_Type', Number_of_materials = '$Number_of_materials', 
                        Notes = '$Notes' WHERE id = $id";
        $update_result = mysqli_query($conn, $update_sql);

        if($update_result) {
            header("location:managment.php");
            exit; // Stop further execution
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "ID parameter is missing.";
}
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
        <h3>قسم شؤون الاقسام الداخلية</h3>
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
        <h4>استمارة التجهيز</h4>
        <form action="" method="post">
            <label>اسم المادة</label>
            <input type="text" id="text" name="Subject_Name" value="<?=$row['Subject_Name'] ?>">
            <label>عدد المواد</label>
            <input type="text" name="Number_of_materials"  value="<?=$row['Number_of_materials'] ?>">
            <label>نوع الصيانة</label>
            <input type="text" name="Maintenance_Type" value="<?=$row['Maintenance_Type'] ?>">
            <label>مسؤول الصيانة</label>
            <input type="text" id="text" name="maintenance_manager" value="<?=$row['maintenance_manager'] ?>">
            <label>الملاحظات</label>
            <input type="text" name="Notes" value="<?=$row['Notes'] ?>">
            <input type="submit" name="submit" value="تعديل">
        </form>
    </div>
</body>
</html>
