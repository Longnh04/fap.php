<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fap.login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/btec.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="div-flex-main">
        <!--  đây là phần bên trái của page login -->
        <div class="div-flex-child-left">
            <div class="div-logo-flex">
                <a href="#"><img src="./imgs/btec.svg" alt="logo-btec"></a>
                <a href="#"><img width="150px" src="./imgs/Mel-logo.png" alt="logo-mel"></a>
            </div>
            <h1>Log in to your account</h1>
            <h3>Welcome! Select method to login:</h3>
            <div class="div-btn-options">
                <button id="Students" onclick="selectRole('student')">Students</button>
                <button id="Lectures" onclick="selectRole('lecturer')">Lecturers</button>
            </div>

            <form action="" method="post">
                <div class="div-login-input">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login with your role" class="button" name="submit">
                    <!-- <button id="btnLogin" onclick="logIn()">Login with your role</button> -->
                </div>
                <!-- đây là phần btn login as a admin -->
                <div class="div-btn-admin">
                    <input type="submit" value="Sign in with Admin" class="button" name="submit">
                    <!-- <button id="btnAdmin" onclick="signIn()">Sign in with Admin</button> -->
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                if ($email == 'admin@gmail.com' && $pass == '123admin') {
                    header('Location: homepage.php');
                    exit;
                } elseif ($email == 'student@gmail.com' && $pass == '123456') {
                    echo "Login as a student";
                    header('Location: homepage.php');
                    exit;
                } elseif ($email == 'lecturers@gmail.com' && $pass == '789123') {
                    echo "login as a lecturers";
                    header('Location: homepage.php');
                    exit;
                }
            }
            ?>
        </div>
        <!-- day la phan div ben phai cua form login -->
        <div class="div-flex-child-right">
            <h1>Academic Portal</h1>
            <div class="div-flex-child-right-cycle">
                <div class="div-flex-child-right-banner">
                    <img src="./imgs/Banner-login.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="./js/login.js"></script>
</body>

</html>