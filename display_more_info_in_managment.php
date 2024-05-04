<?php
include_once "config.php";

// Check if ID is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record from the database based on the ID
    $sql = mysqli_query($conn, "SELECT * FROM mor_info WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);

    // Handle form submission for editing
    if(isset($_POST['submit'])) {
        // Extract form data
        $gender = $_POST['gender'];
        $students_name = $_POST['students_name'];
        $Fathers_Name = $_POST['Fathers_Name'];
        $Grandfather_name = $_POST['Grandfather_name'];
        $Fathers_Grandfathers_name = $_POST['Fathers_grandfathers_name'];
        $Title = $_POST['Title'];
        $marital_status = $_POST['marital_status'];
        $ID_Number = $_POST['ID_Number'];
        $Name_of_circle_people = $_POST['Name_of_circle_people'];
        $Record = $_POST['Record'];
        $newspaper = $_POST['newspaper'];
        $National_card_number = $_POST['National_card_number'];
        $Residence_card_number = $_POST['Residence_card_number'];
        $birth_date = $_POST['birth_date'];
        $place_of_birth = $_POST['place_of_birth'];
        $Governorate = $_POST['Governorate'];
        $Judiciary = $_POST['Judiciary'];
        $alnaheea = $_POST['alnaheea'];
        $nearest_function_point = $_POST['nearest_function_point'];
        $nearest_function_point = $_POST['nearest_function_point'];
        $Chosen_Name = $_POST['Chosen_Name'];
        $Student_Phone_Number = $_POST['Student_Phone_Number'];
        $Phone_Number_of_the_Students_Guardian = $_POST['Phone_Number_of_the_Students_Guardian'];
        $College_department = $_POST['College_department'];
        $stage = $_POST['stage'];
        $result = $_POST['result'];
        $study = $_POST['study'];
        $Type_of_study = $_POST['Type_of_study'];
        $Classify_the_study = $_POST['Classify_the_study'];
         

        // Update the record in the database
        $update_sql = "UPDATE mor_info SET
                        gender = '$gender',
                        students_name = '$students_name',
                        Fathers_Name = '$Fathers_Name',
                        Grandfather_name = '$Grandfather_name',
                        Fathers_grandfathers_name = '$Fathers_Grandfathers_name',
                        Title = '$Title',
                        marital_status = '$marital_status',
                        ID_Number = '$ID_Number',
                        Name_of_circle_people = '$Name_of_circle_people',
                        Record = '$Record',
                        newspaper = '$newspaper',
                        National_card_number = '$National_card_number',
                        Residence_card_number = '$Residence_card_number',
                        birth_date = '$birth_date',
                        place_of_birth = '$place_of_birth',
                        Governorate = '$Governorate',
                        Judiciary = '$Judiciary',
                        alnaheea = '$alnaheea',
                        nearest_function_point = '$nearest_function_point',
                        nearest_function_point = '$nearest_function_point',
                        Chosen_Name = '$Chosen_Name',
                        Student_Phone_Number = '$Student_Phone_Number',
                        Phone_Number_of_the_Students_Guardian = '$Phone_Number_of_the_Students_Guardian',
                        College_department = '$College_department',
                        stage = '$stage',
                        result = '$result',
                        study = '$study',
                        Type_of_study = '$Type_of_study',
                        Classify_the_study = '$Classify_the_study'
                         WHERE id = $id";
        $update_result = mysqli_query($conn, $update_sql);

       if($update_result) {
            header("location:more_info (2).php");
            exit; // Stop further execution
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "ID parameter is missing.";
}
?>







<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="registration.css">
    <style>

    </style>
</head>

<body dir="rtl">



    <div class="image-container"><img src="imeges/images.png" alt="">

        <h3>
            قسم شؤون الاقسام الداخلية
        </h3>
    </div>

    <header>

        <nav>
            <ul>
                <li><a href="home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.html">لوحةالطلبات</a></li>
                <li><a style="background-color: #bab5b5;" href="registration2.php">التعديل</a></li>
                <li><a href="equip2.html">التجهيز</a></li>
                <li><a href="Maintenance2.html">الصيانة</a></li>

            </ul>
        </nav>
        <hr>

        <br>


    </header>





    <form action="managment.php" method="post">

        <div class="mainsubfrom">
            <div class="subform">

                <h1>استمارة التسجيل </h1>

                <div class="flex-container">
                    <div class="form-group1">
                        <label for="marital_status">  الجنس:</label>
                        <input id="marital_status" name="gender" value="<?=$row['gender'] ?>">
                            <br>
                    </div>

                </div>


                <div class="flex-container">

                    <div class="form-group">
                        <label for="student_name">اسم الطالب:</label>
                        <input type="text" id="student_name" name="students_name" value="<?=$row['students_name'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="father_name">اسم الاب:</label>
                        <input type="text" id="father_name" name="Fathers_Name" value="<?=$row['Fathers_Name'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="grandmother_name">اسم الجد:</label>
                        <input type="text" id="grandmother_name" name="Grandfather_name" value="<?=$row['Grandfather_name'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="grandfather_name">اسم جد الاب:</label>
                        <input type="text" id="grandfather_name" name="Fathers_grandfathers_name" value="<?=$row['Fathers_grandfathers_name'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="title">اللقب:</label>
                        <input type="text" id="title" name="Title" value="<?=$row['Title'] ?>"><br>
                    </div>
                </div>




                <div class="flex-container">
                    <div class="form-group">
                        <label for="marital_status">الحالة الاجتماعية:</label>
                        <input id="marital_status" name="marital_status" value="<?=$row['marital_status'] ?>">
                         
                        <br>
                    </div>

                    <div class="form-group">
                        <label for="father_name">رقم الهوية:</label>
                        <input type="number" id="father_name" name="ID_Number" value="<?=$row['ID_Number'] ?>"><br>
                    </div>

                </div>



                <div class="flex-container">

                    <div class="form-group">
                        <label for="grandmother_name">اسم دائرة الاحوال:</label>
                        <input type="text" id="grandmother_name" name="Name_of_circle_people" value="<?=$row['Name_of_circle_people'] ?>"><br>
                    </div>








                  <div class="form-group">
                        <label for="grandfather_name">  السجل  :</label>
                        <input type="number" id="grandfather_name" name="Record" value="<?=$row['Record'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="title">الصحيفة:</label>
                        <input type="number" id="title" name="newspaper" value="<?=$row['newspaper'] ?>"><br>
                    </div>

                </div>


                <div class="flex-container">
                    <div class="form-group">
                        <label for="grandfather_name">  رقم البطاقة التموينية  :</label>
                        <input type="number" id="grandfather_name" name="National_card_number" value="<?=$row['National_card_number'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="title">رقم بطاقة السكن:</label>
                        <input type="number" id="title" name="Residence_card_number" value="<?=$row['Residence_card_number'] ?>"><br>
                    </div>

                </div>


                <div class="flex-container">
                    <div class="form-group">
                        <label for="grandfather_name">   تاريخ الاولادة :</label>
                        <input type="date" id="grandfather_name" name="birth_date" value="<?=$row['birth_date'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="title">     مكان الاولادة:</label>
                        <input type="text" id="title" name="place_of_birth" value="<?=$row['place_of_birth'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">   المحافظة:</label>
                        <input id="marital_status" type="text" name="Governorate" value="<?=$row['Governorate'] ?>">
                             <br>
                    </div>
                </div>



                <div class="flex-container">
                    <div class="form-group">
                        <label for="father_name">  القظاء:</label>
                        <input type="text" id="father_name" name="Judiciary" value="<?=$row['Judiciary'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="grandmother_name">     الناحية:</label>
                        <input type="text" id="grandmother_name" name="alnaheea" value="<?=$row['alnaheea'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="grandfather_name">  الحي  :</label>
                        <input type="text" id="grandfather_name" name="nearest_function_point" value="<?=$row['nearest_function_point'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="title">اقرب نقطة دالة:</label>
                        <input type="text" id="title" name="nearest_function_point" value="<?=$row['nearest_function_point'] ?>"><br>
                    </div>

                </div>



                <div class="flex-container">
                    <div class="form-group">
                        <label for="grandmother_name">     اسم المختار:</label>
                        <input type="text" id="grandmother_name" name="Chosen_Name" value="<?=$row['Chosen_name'] ?>"><br>
                    </div>

                    <div class="form-group">
                        <label for="grandfather_name">  رقم هاتف الطالب  :</label>
                        <input type="tel" id="grandfather_name" name="Student_Phone_Number" value="<?=$row['Student_phone_number'] ?>"><br>
                    </div>







                  <div class="form-group">
                        <label for="title">      رقم هاتف ولي امر الطالب:</label>
                        <input type="tel" id="title" name="Phone_Number_of_the_Students_Guardian" value="<?=$row['Phone_number_of_the_students_guardian'] ?>"><br>
                    </div>

                </div>



                <div class="flex-container">
                    <div class="form-group">
                        <label for="marital_status">   الكلية/القسم:</label>
                        <input id="marital_status" name="College_department" value="<?=$row['College_department'] ?>">
                             
                        <br>
                         <br>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">   المرحلة:</label>
                        <input id="marital_status" name="stage" value="<?=$row['stage'] ?>">
                             
                        <br>
                         <br>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">   النتيجة:</label>
                        <input id="marital_status" name="result" value="<?=$row['result'] ?>">
                             
                        <br>
                    </div>

                </div>


                <div class="flex-container">
                    <div class="form-group">
                        <label for="marital_status">   الدراسة:</label>
                        <input id="marital_status" name="study" value="<?=$row['study'] ?>">
                            
                        <br>
                         <br>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">   نوع الدراسة:</label>
                        <input id="marital_status" name="Type_of_study" value="<?=$row['Type_of_study'] ?>">
                             
                        <br>
                         <br>
                    </div>

                    <div class="form-group">
                        <label for="marital_status">   صنف الدراسة:</label>
                        <input id="marital_status" name="Classify_the_study" value="<?=$row['Classify_the_study'] ?>">
                             
                        <br>
                        <br>
                    </div>

                </div>

                <div class="flex-container">
                    <input type="submit" name="submit" value="العودة">
                </div>

            </div>

        </div>

    </form>



</body>

</html>