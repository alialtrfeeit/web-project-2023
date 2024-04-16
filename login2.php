<?php
include('config.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize error message variable
$error_message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect user input from login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("location: home.html");
        exit;
    } else {
        // Set error message only when login attempt fails
        $error_message = "Error: Your login credentials are incorrect.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>
        .error-message {
            color: #cc0000; /* Red text */
            padding: 10px;
            border-radius: 5px;
            width: fit-content;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <div dir="rtl" class="image-container">
        <img src="imeges/images.png" alt="">
        <h1>قسم شؤون الاقسام الداخلية</h1>
    </div>

    <header dir="rtl" class="header">
        <nav>
            <!-- <ul>
                <li><a style="background-color: #bab5b5;" href="home.html">الصفحة الرئيسية</a></li>
                <li><a href="managment.html">الادارة</a></li>
                <li><a href="registration2.html">التسجيل</a></li>
                <li><a href="equip2.html">التجهيز</a></li>
                <li><a href="Maintenance2.html">الصيانة</a></li>
            </ul> -->
        </nav>
        <hr>
    </header>

    <div class="container">
        <h1>Login</h1>
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <?php if ($error_message && isset($_POST['email']) && empty($_POST['email'])) {
                echo '<span id="emailError" class="error-message">Email is required</span>';
            } ?>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <?php if ($error_message && isset($_POST['password']) && empty($_POST['password'])) {
                echo '<span id="passwordError" class="error-message">Password is required</span>';
            } ?>

            <?php if ($error_message && !empty($_POST['email']) && !empty($_POST['password'])) {
                echo '<span id="loginError" class="error-message">' . $error_message . '</span>';
            } ?>

            <div class="options">
                <label for="remember-me">
                    <input type="checkbox" id="remember-me" name="remember-me"> Remember me
                </label>
                <a class="forgot-password">Forgot Password?</a>
            </div>

            <input type="submit" value="Login">
        </form>
    </div>

    <script src="login.js"></script>
</body>

</html>
