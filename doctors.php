<?php
require 'includes/config/dbh.php';
require 'includes/config/functions.php';
require 'includes/views/login_view.php';
session_start();
connect_DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHub</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body class="main__body">
    <div class="main__page">
        <div class="main__left">
            <div class="main__logo">
                <img src="public/images/logo.png">
                <h1><a href="index.php"><span>Medi</span>Hub</a></h1>
            </div>
        </div>
        <div class="main__right">
            <div class="main__login">
                <form class="main__form" action="includes/doctor_login.php" method="GET">
                    <div>
                        <h1>Doctor</h1>
                    </div>
                    <div class="main__input">
                        <input type="email" name="user_email" placeholder="Email">
                    </div>
                    <div class="main__input">
                        <input type="text" name="user_pass" placeholder="Password">
                    </div>
                    <button>Login</button>
                    <?php 
                    if (isset($_SESSION['error_login'])) {
                        displayLoginErrors($_SESSION['error_login']);
                        
                    }
                    unset($_SESSION['error_login']);
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>