<?php
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equip2</title>
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
<body dir="rtl">
    <div class="image-container"><img src="imeges/images.png" alt="">
        <h3>قسم شؤون الاقسام الداخلية</h3>
    </div>
    <header>
        <nav>
            <ul>
                <li><a href="home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.php">الادارة</a></li>
                <li><a href="registration2.php">التسجيل</a></li>
                <li><a style="background-color: #bab5b5;" href="equip2 (2).php">التجهيز</a></li>
                <li><a href="Maintenance2.php">الصيانة</a></li>
            </ul>
        </nav>
        <hr>
    </header>
    <div dir="ltr" class="forma">
        <button onclick="document.location='equip.html'">فتح استمارة تجهيز</button>
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
                url:"equip2_search.php",
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


    <div class="image-ref"><img src="imeges/klipartz.com.png" alt="">
        <h3>طلبات التجهيز</h3>
    </div>
    <table>
        <tr>
            <th>N</th>
            <th>اسم المادة</th>
            <th>مسؤول الصيانة</th>
            <th>نوع الصيانة</th>
            <th>عدد المواد</th>
            <th>الملاحظات</th>
            <th>حذف</th>
            <th>تعديل</th>
        </tr>
        <?php
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
            <td><a href="delete_equip2.php?id=<?=$row["ID"]?>"><img src="imeges/trash.png" alt=""></a></td>
            <td><a href="edit_equip2.php?id=<?=$row["ID"]?>"><img src="imeges/pen.png" alt=""></a></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>
