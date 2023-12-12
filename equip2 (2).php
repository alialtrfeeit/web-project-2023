 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equip2</title>
    <link rel="stylesheet" type="text/css" href="tabel.css">

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
            <li><a href="managment.html">الادارة</a></li>
            <li><a href="registration2.html">التسجيل</a></li>
            <li><a style="background-color: #bab5b5;" href="equip.php">التجهيز</a></li>
            <li><a href="Maintenance2.html">الصيانة</a></li>

        </ul>
    </nav>
    <hr>

</header>

<body dir="rtl">

    <div dir="ltr" class="forma">
        <button onclick="document.location=' equip.html'"> فتح استمارة تجهيز</button>

    </div>


    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            ادارة التجهيز </h3>
    </div>
    <table>
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

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

         $sql = "SELECT * FROM  equip2";
        $result = $conn->query($sql);

 
            if (!$result) {
                die("Error in SQL query: " . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["Subject_Name"] . "</td>";
                echo "<td>" . $row["maintenance_manager"] . "</td>";
                echo "<td>" . $row["Maintenance_Type"] . "</td>";
                echo "<td>" . $row["Number_of_materials"] . "</td>";
                echo "<td>" . $row["Notes"] . "</td>";
                echo "<td>" . $row["condition"] . "</td>";
                echo '<td> <img src="imeges/trash.png" alt=""></td>';
                echo '<td> <img src="imeges/pen.png" alt=""> </td>';
                echo "</tr>";

             }


        
         

        $conn->close();
        ?>  
       
    </table>

</body>

</html>