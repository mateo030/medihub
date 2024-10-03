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
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <div class="user__name">
                        <h1><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?></h1>
                        <p><?php echo $_SESSION['user_email'] ?></p>
                    </div>
                </div>
                <a href="../../includes/logout_inc.php">Log out</a>
            </div>
            <div class="lower__nav">
                <a href="dashboard.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </div>
                </a>
                <a href="patients.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-user"></i>
                        <p>My Patients</p>
                    </div>
                </a>
                <a href="doc_appointments.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-hospital-user"></i>
                        <p>Appointments</p>
                    </div>
                </a>
                <div class="nav__wrapper">
                    <i class="fa-solid fa-gear"></i>
                    <p>Settings</p>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__header">
                <h2>Home</h2>
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
            <div class="main__banner" id="main__banner__doctor">
                <div class="main__banner__text">
                    <div>
                        <h2>Welcome</h2>
                        <h1>Dr. <?php echo $_SESSION['first_name'] ?>.</h1>
                    </div>
                    <div>
                        <p>Thank you for joining with us</p><br>
                        <p>You can view appointment requests, history, and patient details</p>
                    </div>
                    <div>
                        <a href="doc_appointments.php">View Appointments</a>
                    </div>
                </div>
            </div>
            <div class="main__info">
                <div class="status__container">
                    <h2>Status</h2>
                    <div class="status">
                        <div class="status__card">
                            <div>
                                <h2><?php echo returnPatientCount($_SESSION['doctor_id'])?></h2>
                                <p>My Patients</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>
                        <div class="status__card">
                            <div>
                                <h2>2</h2>
                                <p>Prescriptions</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-prescription-bottle-medical"></i>
                            </div>
                        </div>
                        <div class="status__card">
                            <div>
                                <h2>2</h2>
                                <p>My Bookings</p>
                            </div>
                            <div>
                                <i class="fa-regular fa-bookmark"></i>
                            </div>
                        </div>
                        <div class="status__card">
                            <div class="status__text">
                                <h2>2</h2>
                                <p>My Appointments</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-hospital-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking__container">
                    <h2>Your upcoming appointments</h2>
                    <div class="bookings">
                        <table>
                            <tr>
                                <th>Appointment No.</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Patient Name</th>
                            </tr>
                            <?php displayMiniDocAppointments($_SESSION['doctor_id'])?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>