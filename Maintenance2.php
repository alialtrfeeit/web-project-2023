<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance2</title>
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
            <li><a href="managment.php">لوحةالطلبات</a></li>
            <li><a href="registration2.php">التسجيل</a></li>
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
                url:"Maintenance_search.php",
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
                 <td> <a href="equip.html">اضغط هنا للتجهيز</a> </td>
                <td>   <a href="delete_Maintenance.php?id=<?=$row["ID"]?>"> <img src="imeges/trash.png" alt=""></a>  </td>
                <td>   <a href="edit_Maintenance.php?id=<?=$row["ID"]?>"> <img src="imeges/pen.png" alt=""> </a>  </td>

            </tr> 

                <?php

             }

        $conn->close();
         ?>

 
    </table>
     

</body>

</html>