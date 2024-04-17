<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration2</title>
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
            <li><a href="managment.php">الادارة</a></li>
            <li><a style="background-color: #bab5b5;" href="registration2.php">التسجيل</a></li>
            <li><a href="equip2 (2).php">التجهيز</a></li>
            <li><a href="Maintenance2.php">الصيانة</a></li>

        </ul>
    </nav>
    <hr>

</header>

<body dir="rtl">
    <div dir="ltr" class="forma">
        <button onclick="document.location='registration.html '"> فتح استمارة تسجيل</button>

    </div>


    <div dir="ltr" class="forma">
        <button onclick="document.location='more_info (2).php'">       معلومات الطلبة المسجلة</button>

    </div>


    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            الطلبة المسجلين </h3>
    </div>
    <table>
        <tr>
            <th> N </th>
            <th> اسم الطالب</th>
            <th> اسم  الاب</th>
            <th> رقم هاتف الطالب</th>
            <th>معلومات اضافية </th>
            <th> حذف </th>
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

         $sql = "SELECT * FROM  mor_info";
        $result = $conn->query($sql);

 
            if (!$result) {
                die("Error in SQL query: " . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
                ?> 


            <tr> 
                <td> <?=$row["ID"]?>   </td> 
                <td> <?=$row["students_name"]?>  </td>
                <td> <?=$row["Fathers_Name"]?>  </td>
                <td> <?=$row["Student_phone_number"]?>  </td> 
                <td><a href="display_more_info.php?id=<?=$row["ID"]?>"> اضغط لعرض التفاصيل</a></td>
                <td>   <a href="delete_registration2.php?id=<?=$row["ID"]?>"> <img src="imeges/trash.png" alt=""></a>  </td>
 
            </tr> 

                <?php

             }

        $conn->close();
         ?>
        <!-- <tr>
            <td>1 </td>
            <td> امير عمار لفته</td>
            <td> تم التسجيل</td>
            <td> <a href="more_info (2).php">  اضغط لعرض التفاصيل</a> </td>
            <td> <img src="imeges/trash.png" alt=""></td>
        </tr>
        <tr>
            <td> 2</td>
            <td> محمد علي حميدان</td>
            <td> تم التسجيل</td>
            <td> <a href="more_info (2).php">  اضغط لعرض التفاصيل</a> </td>
            <td> <img src="imeges/trash.png" alt=""></td>

        </tr> -->

    </table>


</body>

</html>