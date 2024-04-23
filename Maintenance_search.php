<?php

include("config.php");

if (isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $query = "SELECT * FROM maintenance2 WHERE students_name LIKE '{$input}%' OR Sector_number LIKE '{$input}%'  OR room_number LIKE '{$input}%' 
    OR Maintenance_Type	 LIKE '{$input}%'  OR  Notes  LIKE '{$input}%' LIMIT 4 ";

    $result = mysqli_query($conn , $query);

    if (mysqli_num_rows($result) > 0) {
?>
 
         <table class="table table-bordered table-striped mt-4">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>اسم الطالب</th>
                        <th>رقم القطاع</th>
                        <th>رقم الغرفة	</th>
                        <th>نوع الصيانة	</th>
                        <th>الملاحظات</th>
                    </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $id = $row['ID'];
                    $studentsname = $row['students_name'];
                    $Sector_number = $row['Sector_number'];
                    $room_number = $row['room_number'];
                    $Maintenance_Type = $row['Maintenance_Type'];
                    $Notes = $row['Notes'];


                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $studentsname;?></td>
                        <td><?php echo $Sector_number;?></td>
                        <td><?php echo $room_number;?></td>
                        <td><?php echo $Maintenance_Type;?></td>
                        <td><?php echo $Notes;?></td>
 
                    </tr>

                    <?php
                }
                
                ?>
            </tbody>

         </table>

<?php
       
    }else {
        echo "<h2   style='text-align:center';> لا يوجد نتائج</h2>";
    }
}

?>