<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration2</title>
    <link rel="stylesheet" type="text/css" href="tb.css">

    <style>
  #live_search {
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: Arial, sans-serif; /* Change font */
    font-size: 19px; /* Adjust font size */
    padding: 10px; /* Add padding */
    border: 2px solid #ccc; /* Add border */
    border-radius: 5px; /* Add border radius */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Add box shadow */
  }
</style>

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


    <input type="text" class="form-control"  id="live_search" autocomplete="off" placeholder="   بحث ...">

</div>

<div id="searchresult"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script type="text/javascript">

    $(document).ready(function(){

        $("#live_search").keyup(function(){

            var input = $(this).val();

           if (input !="") {
            
            $.ajax({
                url:"registration2_search.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    $("#searchresult").html(data);
                    $("#searchresult").css("display","block");

                }

            });
           }else {

            $("#searchresult").css("display","none");

           }
        });
    });

</script>


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
       

    </table>


</body>

</html>