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
                <div class="nav__wrapper">
                    <i class="fa-solid fa-prescription-bottle-medical"></i>
                    <a><p>Prescriptions</p></a>
                </div>
                <div class="nav__wrapper">
                    <i class="fa-solid fa-gear"></i>
                    <a><p>Settings</p></a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__header">
                <h2>Request an appointment</h2>
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
            <div class="form__card__dash">
				<form action="../../includes/appointment_inc.php" method="POST">
                    <input type="hidden" name="doctor_id" value="<?php echo $_GET['id'] ?>">
                    <div class="select__container">
                        <select class="select__box" name="month">
                            <option value="">Month</option>
                            <?php displayOptions(12, 1) ?>
                        </select>
                        <select class="select__box" name="day">
                            <option value="">Day</option>
                            <?php displayOptions(30, 1) ?>
                        </select>
                    </div>
                    <div class="form__time">
                        <input type="text" name="time" placeholder="Example: 13:00">
                    </div>
					<button>Book</button>
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
    <script src="../../scripts/script.js"></script>
</body>
</html>
