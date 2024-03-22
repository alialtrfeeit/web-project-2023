<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>managment</title>
    <link rel="stylesheet" type="text/css" href="tb.css">

</head>
<div class="image-container"><img src="imeges/images.png" alt="">

    <h3>
        قسم شؤون الاقسام الداخلية
    </h3>
</div>

<header>

    <nav>
        <ul>
            <li><a href="home.html">الصفحة الرئيسية</a></li>
            <li><a style="background-color: #bab5b5;" href="managment.php">الادارة</a></li>
            <li><a href="registration2.html">التسجيل</a></li>
            <li><a href="equip2 (2).php">التجهيز</a></li>
            <li><a href="Maintenance2.php">الصيانة</a></li>
            <li><a class="log" href="login.html"> LOGOUT  </a></li>
            <li><a class="log" href="sin_as___.html"> New Account  </a></li>
        </ul>
    </nav>

    <hr>

</header>

<body dir="rtl">



    <br>
    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

<h3>
    طلبات الصيانة </h3>
</div>
<table>
<tr>
    <th>N </th>
    <th> اسم الطالب</th>
    <th> رقم القطاع </th>
    <th> رقم الغرفة</th>
    <th> نوع الصيانة</th>
    <th> الملاحظات</th>
    <th> تحويل الى التجهيز</th>
    <th> حذف</th>
    <th> تعديل</th>

</tr>

<?php
     $servername = "localhost:3306";   
    $username = "root";
    $password = "";
    $db = "shms";

$conn = new mysqli($servername, $username, $password, $db);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT * FROM  maintenance2";
$result = $conn->query($sql);


    if (!$result) {
        die("Error in SQL query: " . $conn->error);
    }

    while($row = $result->fetch_assoc()) {
        ?> 


    <tr> 
        <td> <?=$row["ID"]?>   </td> 
        <td> <?=$row["students_name"]?>  </td>
        <td> <?=$row["Sector_number"]?>  </td> 
        <td> <?=$row["room_number"]?>  </td> 
        <td> <?=$row["Maintenance_Type"]?>  </td> 
        <td> <?=$row["Notes"]?>  </td>
        <!-- <td>  <?=$row["the_condition"]?> </td>  -->
        <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>
        <td>   <a href="delete_Maintenance_in_managment.php?id=<?=$row["ID"]?>"> <img src="imeges/trash.png" alt=""></a>  </td>
        <td>   <a href="edit_Maintenance_in_Maintenance.php?id=<?=$row["ID"]?>"> <img src="imeges/pen.png" alt=""> </a>  </td>

    </tr> 

        <?php

     }

$conn->close();
 ?>


</table>


    <br>
    <br> 
    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            ادارة التجهيز </h3>
    </div>
    <table class="last_table">
        <tr>
            <th>N </th>
            <th> اسم المادة</th>
            <th>مسؤول الصيانة </th>
            <th> نوع الصيانة</th>
            <th> عدد المواد</th>
            <th> الملاحظات</th>
            <th> الحالة</th>
            <th> حذف</th>
            <th> تعديل</th>
        </tr>
        <?php

           $servername = "localhost:3306";   
          $username = "root";
          $password = "";
          $db = "shms";

          $conn = new mysqli($servername, $username, $password, $db);
          $conn->set_charset("utf8mb4");


        $sql = "SELECT * FROM equip2";
        $result = $conn->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?=$row["ID"]?></td>
            <td><?=$row["Subject_Name"]?></td>
            <td><?=$row["maintenance_manager"]?></td>
            <td><?=$row["Maintenance_Type"]?></td>
            <td><?=$row["Number_of_materials"]?></td>
            <td><?=$row["Notes"]?></td>
            <td><?=$row["condition"]?></td>
            <td><a href="delete_equip2_in_managment.php?id=<?=$row["ID"]?>"><img src="imeges/trash.png" alt=""></a></td>
            <td><a href="edit_equip2_in_managment.php?id=<?=$row["ID"]?>"><img src="imeges/pen.png" alt=""></a></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            ادارة التسجيل </h3>
    </div>
    <table>
        <tr>
            <th>N </th>
            <th> اسم الطالب</th>
            <th> الحالة</th>
            <th> حذف</th>
            <th> تعديل</th>
        </tr>
        <tr>
            <td> 1</td>
            <td> امير عمار لفته </td>
            <td> تم التسجيل</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""> </td>
        </tr>
        <tr>
            <td> 2</td>
            <td> محمد علي حميدان </td>
            <td> تم التسجيل</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr>
        <tr>
            <td> 3</td>
            <td> وليد اسماعيل حسين </td>
            <td> تم التسجيل</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr>
        <tr>
            <td> 4</td>
            <td> مصطفى صلاح جبار </td>
            <td> لم يتم التسجيل</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr>
    </table>


    <br>
    <br>
   

</body>

</html>