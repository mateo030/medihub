<?php
require '../../includes/config/dbh.php';
require '../../includes/config/functions.php';
require '../../includes/views/dashboard_view.php';
session_start();
connect_DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://kit.fontawesome.com/492cd470a0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <div class="dashboard__container">
        <div class="side__menu">
            <div class="upper__nav">
                <div class="current__user">
                    <div>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user__name">
                        <h1><?php echo $_SESSION['first_name'] . " " .$_SESSION['last_name']?></h1>
                        <p><?php echo $_SESSION['user_email']?></p>
                    </div>
                </div>
                <a href="../../includes/logout_inc.php">Log out</a>
            </div>
            <div class="lower__nav">
                <a href="dashboard.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </div>
                </a>
                <a href="doctor_list.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>All Doctors</p>
                    </div>
                </a>
                <a href="appointments.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-hospital-user"></i>
                        <p>Appointments</p>
                    </div>
                </a>
                <a href="doc_prescriptions.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <p>Prescriptions</p>
                    </div>
                </a>
                <div class="nav__wrapper">
                    <i class="fa-solid fa-gear"></i>
                    <a><p>Settings</p></a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__header">
                <h2>Your info</h2>
                <div class="date">
                    <div class="today__date">
                        <p>Today's Date</p>
                        <h2><?php echo date('Y/m/d')?></h2>
                    </div>
                    <div class="date__icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                </div>
            </div>
            <div class="user__info">
                <div class="user__name">
                    <h2>First Name</h2>
                    <p><?= $_SESSION['first_name']?></p>
                    <h2>Last Name</h2>
                    <p><?= $_SESSION['last_name']?></p>
                </div>
                <div class="user_email">
                    <h2>Email</h2>
                    <?= $_SESSION['user_email']?>
                </div>
                <div class="user__contact">
                    <h2>Phone Number</h2>
                    <p><?= $_SESSION['contact_number']?></p>
                </div>
                <div class="user_address">
                    <h2>Address</h2>
                    <?= $_SESSION['address']?>
                </div>
            </div>
        </div>
    </div>
    <script src="../../scripts/script.js"></script>
</body>
</html>
