<?php

include("config.php");

if (isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $query = "SELECT * FROM equip2 WHERE Subject_Name LIKE '{$input}%' OR maintenance_manager LIKE '{$input}%'  OR Maintenance_Type LIKE '{$input}%' 
    OR Number_of_materials	 LIKE '{$input}%'  OR  Notes  LIKE '{$input}%' LIMIT 4 ";

    $result = mysqli_query($conn , $query);

    if (mysqli_num_rows($result) > 0) {
?>
 
         <table class="table table-bordered table-striped mt-4">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>اسم المادة</th>
                        <th>  مسؤول الصيانة	</th>
                        <th>  نوع الصيانة</th>
                        <th>  عدد المواد</th>
                        <th>الملاحظات</th>
                    </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $id = $row['ID'];
                    $Subject_Name = $row['Subject_Name'];
                    $maintenance_manager = $row['maintenance_manager'];
                    $Maintenance_Type = $row['Maintenance_Type'];
                    $Number_of_materials = $row['Number_of_materials'];
                    $Notes = $row['Notes'];


                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $Subject_Name;?></td>
                        <td><?php echo $maintenance_manager;?></td>
                        <td><?php echo $Maintenance_Type;?></td>
                        <td><?php echo $Number_of_materials;?></td>
                        <td><?php echo $Notes;?></td>
 
                    </tr>

                    <?php
                }
                
                ?>
            </tbody>

         </table>

<?php
       
    }else {
        echo "<h2   style='color:red; text-align:center';> لا يوجد نتائج</h2>";
    }
}

?>