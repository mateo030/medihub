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
                <a href="doc_prescriptions.php">
                    <div class="nav__wrapper">
                        <i class="fa-solid fa-prescription-bottle-medical"></i>
                        <a><p>Prescriptions</p></a>
                    </div>
                </a>
                
            </div>
        </div>
        <div class="main">
            <div class="main__header">
                <h2>Prescriptions</h2>
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
            <div class="prescription__form">
                <form action="../../includes/prescriptions.php" method="POST">
                    <input type="hidden" name="doctor_id" value="<?= $_SESSION['doctor_id']?>">
                    <div>
                        <select name="patient_id">
                            <option value="">Patients</option>
                            <?php echo displayAppointmentOptions($_SESSION['doctor_id']) ?>
                        </select>
                    </div>
                    <div class="prescription__form__meds">
                        <input name="medication" placeholder="Medication">
                        <input name="dosage" placeholder="Dosage">
                        <input name="duration" placeholder="Duration">
                    </div>
                    <div class="prescription__textarea">
                        <textarea name="notes"></textarea>
                    </div>
                    <button>Prescribe</button>
                </form>
            </div>
            <div class="prescriptions_table">
                <h2 style="color: #007acc">Prescribed Patients</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Medication</th>
                        <th>Dosage</th>
                        <th>Duration</th>
                        <th>Notes</th>
                    </tr>
                    <?php displayPrescriptions($_SESSION['doctor_id'])?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>