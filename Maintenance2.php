<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance2</title>
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
            <li><a href="registration2.html">التسجيل</a></li>
            <li><a href="equip2 (2).php">التجهيز</a></li>
            <li><a style="background-color: #bab5b5;" href=" Maintenance2.php">الصيانة</a></li>

        </ul>
    </nav>
    <hr>

</header>

<body dir="rtl">

    <div dir="ltr" class="forma">
        <button onclick="document.location='Maintenance.html'"> فتح استمارة   صيانة</button>

    </div>





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

        </tr>
        <tr>
            <td> 1</td>
            <td> احمد سمير علي</td>
            <td> 2</td>
            <td> 15</td>
            <td> صيانة كهربائيات </td>
            <td> لا يوجد</td>
            <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>

        </tr>
        <tr>
            <td> 2</td>
            <td> جلال احمد وليد</td>
            <td> 2</td>
            <td> 18</td>
            <td> صيانة كهربائيات </td>
            <td> لا يوجد</td>
            <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>
        </tr>
        <tr>
            <td> 3</td>
            <td> رضا فاضل حسين</td>
            <td> 3</td>
            <td> 21</td>
            <td> صيانة كهربائيات </td>
            <td> لا يوجد</td>
            <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>
        </tr>
        <tr>
            <td> 4</td>
            <td> بسام امجد عباس</td>
            <td> 1</td>
            <td> 11</td>
            <td> صيانة كهربائيات </td>
            <td> لا يوجد</td>
            <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>
        </tr>
    </table>
    <br>


    <div class="image-ref"><img src=" imeges/klipartz.com.png" alt="">

        <h3>
            ادارة الصيانة </h3>
    </div>




    <table class="last_table">
        <tr>
            <th>N </th>
            <th> نوع الصيانة </th>
            <th>مسؤول الصيانة </th>
            <th> مواد التجهيز</th>
            <th> عدد موادالتجهيز</th>
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

         $sql = "SELECT * FROM  maintenance2";
        $result = $conn->query($sql);

 
            if (!$result) {
                die("Error in SQL query: " . $conn->error);
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["students_name"] . "</td>";
                echo "<td>" . $row["Sector_number"] . "</td>";
                echo "<td>" . $row["room_number"] . "</td>";
                echo "<td>" . $row["Maintenance_Type"] . "</td>";
                echo "<td>" . $row["Notes"] . "</td>";
                echo "<td>" . $row["the_condition"] . "</td>";
                echo '<td> <img src="imeges/trash.png" alt=""></td>';
                echo '<td> <img src="imeges/pen.png" alt=""> </td>';
                echo "</tr>";

             }


        
         

        $conn->close();
        ?>  
        <!-- <tr>
            <td> 1</td>
            <td> صيانة كهربائيات </td>
            <td> علي هادي عبود </td>
            <td> مصباح W40 </td>
            <td> 2</td>
            <td> لا يوجد</td>
            <td> تمت الصيانة</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""> </td>
        </tr>
        <tr>
            <td> 2</td>
            <td> صيانة كهربائيات </td>
            <td> علي هادي عبود </td>
            <td> مصباح W40 </td>
            <td> 3</td>
            <td> لا يوجد</td>
            <td> لم تتم الصيانة</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr>
        <tr>
            <td> 3</td>
            <td> صيانة كهربائيات </td>
            <td> علي هادي عبود </td>
            <td> مصباح W40 </td>
            <td> 2</td>
            <td> لا يوجد</td>
            <td> تمت الصيانة</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr>
        <tr>
            <td> 4</td>
            <td> صيانة كهربائيات </td>
            <td> علي هادي عبود </td>
            <td> مصباح W40 </td>
            <td> 3</td>
            <td> لا يوجد</td>
            <td> تمت الصيانة</td>
            <td> <img src="imeges/trash.png" alt=""></td>
            <td> <img src="imeges/pen.png" alt=""></td>
        </tr> -->
    </table>

</body>

</html>