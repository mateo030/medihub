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
                        <i class="fa-solid fa-user"></i>
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
                <div class="nav__wrapper">
                    <i class="fa-solid fa-prescription-bottle-medical"></i>
                    <p>Prescriptions</p>
                </div>
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
            <div class="main__banner">
                <div class="main__banner__text">
                    <div>
                        <h2>Welcome</h2>
                        <h1><?php echo $_SESSION['first_name'] ?>.</h1>
                    </div>
                    <div>
                        <p>Track your past appointment history.</p><br>
                        <p>Also find out the expected arrival time of your doctor or medical consultant</p>
                    </div>
                    <div class="main__search">
                        <h2>Find a doctor</h2>
                        <form>
                            <input type="text" placeholder="Search a doctor and we will find a session available">
                            <button>Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main__info">
                <div class="status__container">
                    <h2>Status</h2>
                    <div class="status">
                        <div class="status__card">
                            <div>
                                <h2><?php echo returnDoctorCount() ?></h2>
                                <p>Available Doctors</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-user-doctor"></i>
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