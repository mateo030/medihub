<?php
require 'includes/config/dbh.php';
require 'includes/config/functions.php';
require 'includes/views/signup_view.php';
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
                <h1><span>Medi</span>Hub</h1>
            </div>
        </div>
        <div class="main__right">
            <div class="main__login">
                <form class="main__form" action="includes/signup_inc.php" method="POST">
                    <div>
                        <h1>Sign up</h1>
                        <p>Already have an account? <a href="index.php">sign in</a></p>
                    </div>
                    <div class="form__flex">
                        <div class="main__input-small"><input type="text" name="first_name" placeholder="First name"></div>
                        <div class="main__input-small"><input type="text" name="last_name" placeholder="Last name"></div>
                    </div>
                    <div class="main__input">
                        <input type="email" name="user_email" placeholder="EMAIL">
                    </div>
                    <div class="main__input">
                        <input type="text" name="user_pass" placeholder="PASSWORD">
                    </div>
                    <div class="main__input">
                        <input type="text" name="user_address" placeholder="ADDRESS">
                    </div>
                    <div class="main__input-small">
                        <input type="tel" name="user_contact" placeholder="Phone Number">
                    </div>
                    <div class="main__birthdate">
                        <div>
                            <small>Birth Date</small>
                        </div>
                        <div class="select__container">
                            <select class="select__box" name="year">
                                <option value="">Year</option>
                                <?php displayOptions(2024, 1900) ?>
                            </select>
                            <select class="select__box" name="month">
                                <option value="">Month</option>
                                <?php displayOptions(12, 1) ?>
                            </select>
                            <select class="select__box" name="day">
                                <option value="">Day</option>
                                <?php displayOptions(30, 1) ?>
                            </select>
                        </div>
                    </div>
                    <div class="main__gender">
                        <div class="radio_container">
                            <input type="radio" name="gender" value="Male">
                            <p>Male</p>
                        </div>
                        <div class="radio_container">
                            <input type="radio" name="gender" value="Female">
                            <p>Female</p>
                        </div>
                    </div>
                    <button>Login</button>
                    <?php 
                    if (isset($_SESSION['error_signup'])) {
                        displaySignupError($_SESSION['error_signup']);
                        
                    }
                    unset($_SESSION['error_signup']);
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>