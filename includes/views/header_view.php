<?php
require 'includes/config/dbh.php';
require 'includes/config/functions.php';
session_start();
connect_DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Appointment</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="public/images/logo.png">
            <h1><a href="index.php"><span>Project</span> Clinic</a></h1>
        </div>
        <nav>
            <div class="navigation">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
        </nav>
    </header>