<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <title>more_info</title>
    <link rel="stylesheet" type="text/css" href="tb.css">

</head>
<div class="image-container"><img src="imeges/images.png" alt="">

    <h3>
        قسم شؤون الا قسام ال داخلية
    </h3>
</div>

<header>

    <nav>
        <ul>
            <li><a href="home.html">الصفحة الرئيسية</a></li>
            <li><a href="managment.php"> لوحةالطلبات  </a></li>
            <li><a style="background-color: #bab5b5;" href="registration2.php">معلومات الطلبة المسجلة</a></li>
            <li>
                <a href="equip2 (2).php"> التجهيز</a>
            </li>
            <li><a href="Maintenance2.php">الصيانة </a></li>

        </ul>
    </nav>
    <hr>

</header>

<body dir="rtl">




    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            معلومات الطلبة المسجلين </h3>
    </div>
    <table>
        <tr>
            <th>N </th>
            <th> الجنس</th>
            <th> اسم الطالب </th>
            <th> اسم الاب</th>
            <th> اسم الجد </th>
            <th> اسم جد الاب</th>
            <th> اللقب</th>
            <th> الحالة الاجتماعية</th>
            <th> رقم الهوية</th>
            <th>اسم دائرة الاحول </th>
            <th> السجل</th>
            <th>الصحيفة </th>
            <th> رقم البطاقة التموينية </th>
            <th> رقم بطاقة السكن</th>
            <th> تاريخ الولادة</th>
            <th> مكان الولادة</th>
            <th> المحافظة</th>
            <th> القظاء</th>
            <th>الناحية </th>
            <th> الحي</th>
            <th>اقرب نقطة دالة </th>
            <th> اسم المختار</th>
            <th> رقم هاتف الطالب</th>
            <th> رقم هاتف ولي امر الطالب</th>
            <th> الكلية\القسم</th>
            <th> المرحلة</th>
            <th> النتيجة</th>
            <th> الدراسة</th>
            <th> نوع الدراسة </th>
            <th> صنف الدراسة</th>
            <th> حذف </th>
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

    $sql = "SELECT * FROM  mor_info";
   $result = $conn->query($sql);


       if (!$result) {
           die("Error in SQL query: " . $conn->error);
       }

       while($row = $result->fetch_assoc()) {
           ?>


            <tr>
                <td>
                    <?=$row["ID"]?>
                </td>
                <td>
                    <?=$row["gender"]?>
                </td>
                <td>
                    <?=$row["students_name"]?>
                </td>
                <td>
                    <?=$row["Fathers_Name"]?>
                </td>
                <td>
                    <?=$row["Grandfather_name"]?>
                </td>
                <td>
                    <?=$row["Fathers_grandfathers_name"]?>
                </td>


                <td>
                    <?=$row["Title"]?>
                </td>
                <td>
                    <?=$row["marital_status"]?>
                </td>
                <td>
                    <?=$row["ID_Number"]?>
                </td>
                <td>
                    <?=$row["Name_of_circle_people"]?>
                </td>
                <td>
                    <?=$row["Record"]?>
                </td>
                <td>
                    <?=$row["newspaper"]?>
                </td>
                <td>
                    <?=$row["National_card_number"]?>
                </td>


                <td>
                    <?=$row["Residence_card_number"]?>
                </td>
                <td>
                    <?=$row["birth_date"]?>
                </td>
                <td>
                    <?=$row["place_of_birth"]?>
                </td>
                <td>
                    <?=$row["Governorate"]?>
                </td>
                <td>
                    <?=$row["Judiciary"]?>
                </td>
                <td>
                    <?=$row["alnaheea"]?>
                </td>
                <td>
                    <?=$row["nearest_function_point"]?>
                </td>
                <td>
                    <?=$row["nearest_function_point"]?>
                </td>
                <td>
                    <?=$row["Chosen_name"]?>
                </td>
                <td>
                    <?=$row["Student_phone_number"]?>
                </td>
                <td>
                    <?=$row["Phone_number_of_the_students_guardian"]?>
                </td>
                <td>
                    <?=$row["College_department"]?>
                </td>
                <td>
                    <?=$row["stage"]?>
                </td>
                <td>
                    <?=$row["result"]?>
                </td>
                <td>
                    <?=$row["study"]?>
                </td>
                <td>
                    <?=$row["Type_of_study"]?>
                </td>
                <td>
                    <?=$row["Classify_the_study"]?>
                </td>
                 
                <td>
                    <a href="delete_more_info.php?id=<?=$row["ID"]?>"> <img src="imeges/trash.png" alt=""></a>
                </td>
                <td><a href="edit_more_info.php?id=<?=$row["ID"]?>"> <img src="imeges/pen.png" alt=""></a></td>
            </tr>

            <?php

        }


   
    

   $conn->close();
    ?>



    </table>

</body>

</html>