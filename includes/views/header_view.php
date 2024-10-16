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