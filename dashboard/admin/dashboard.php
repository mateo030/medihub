<?php
require '../../includes/config/dbh.php';
require '../../includes/config/functions.php';
session_start();
connect_DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <h1><?php echo $_SESSION['first_name']?></h1>
                    </div>
                </div>
                <a href="../../includes/logout_inc.php">Log out</a>
            </div>
            <div class="lower__nav">
                <a href="dashboard.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-table-columns"></i>
                        <p>Dashboard</p>
                    </div>
                </a>
                <a href="admin_list.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-user-doctor"></i>
                        <p>Doctor List</p>
                    </div>
                </a>
                <div class="nav__wrapper">
                    <i class="fa-solid fa-bed"></i>
                    <a><p>Patients List</p></a>
                </div>
                <div class="nav__wrapper">
                    <i class="fa-regular fa-clock"></i>
                    <a><p>Schedule</p></a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__header">
                <h2>Dashboard</h2>
                <div class="date">
                    <div class="today__date">
                        <p>Today's Date</p>
                        <h2>2024/9/28</h2>
                    </div>
                    <div class="date__icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                </div>
            </div>
            <div class="main__info">  
                <div class="status__container">
                    <h2>Status</h2>
                    <div class="status">
                        <div class="status__card">
                            <div>
                                <h2>0</h2>
                                <p>Doctors</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-user-doctor"></i>
                            </div>
                        </div>
                        <div class="status__card">
                            <div>
                                <h2>2</h2>
                                <p>Patients</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-bed"></i>
                            </div>
                        </div>
                        <div class="status__card">
                            <div class="status__text">
                                <h2>2</h2>
                                <p>Appointments</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-hospital-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking__container">
                    <h2>Upcoming appointments until next friday</h2>
                    <div class="bookings">
                        <table>
                            <tr>
                                <th>Appointment No.</th>
                                <th>Title</th>
                                <th>Doctor</th>
                                <th>Scheduled date & time</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Check up</td>
                                <td>Yra balog</td>
                                <td>2024/9/28</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
