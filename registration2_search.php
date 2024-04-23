<?php

include("config.php");

if (isset($_POST['input'])) {
    
    $input = $_POST['input'];

    $query = "SELECT * FROM mor_info WHERE students_name LIKE '{$input}%' OR Fathers_Name LIKE '{$input}%'  OR Student_phone_number LIKE '{$input}%'  LIMIT 4 ";

    $result = mysqli_query($conn , $query);

    if (mysqli_num_rows($result) > 0) {
?>
 
         <table class="table table-bordered table-striped mt-4">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>  اسم الطالب</th>
                        <th> اسم الاب	</th>
                        <th>   رقم هاتف الطالب	  </th>
                       
                    </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $id = $row['ID'];
                    $students_name = $row['students_name'];
                    $Fathers_Name = $row['Fathers_Name'];
                    $Student_phone_number = $row['Student_phone_number'];
                    
                    ?>

                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $students_name;?></td>
                        <td><?php echo $Fathers_Name;?></td>
                        <td><?php echo $Student_phone_number;?></td>
            
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