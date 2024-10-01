<?php
require '../../includes/config/dbh.php';
require '../../includes/config/functions.php';
require '../../includes/views/admin_view.php';
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
                <h2>Doctor List</h2>
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
            <div class="doctors">
                <div class="main__search">
                    <form>
                        <input type="text" placeholder="Search doctor name">
                        <button>Search</button>
                    </form>
                </div>
                <table class="doctor__table">
                    <tr>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    <?php displayDoctors()?>
                    <tr>
                        <td><button id="modalBtn">+ Register Doctor</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div id="docModal" class="modal">
                    <div class="modal__content">
                        <span class="close">&times;</span>
                        <h1>Register Doctor</h1>
                        <div class="form__card">
                            <form action="../../includes/admin_inc.php" method="POST">
                                <div class="form__names">
                                    <input type="text" name="first_name" placeholder="FIRST NAME">
                                    <input type="text" name="last_name" placeholder="LAST NAME">
                                </div>
                                <div class="form__email">
                                    <input type="email" name="doc_email" placeholder="EMAIL">
                                </div>
                                <div class="form__password">
                                    <input type="text" name="doc_pass" placeholder="PASSWORD">
                                </div>
                                <div class="form__address">
                                    <input type="text" name="doc_address" placeholder="ADDRESS">
                                </div>
                                <div class="form__contact">
                                    <input type="tel" name="doc_contact" placeholder="Phone Number">
                                </div>
                                <div class="form__specialization">
                                    <input type="text" name="specialization" placeholder="SPECIALIZATION">
                                </div>
                                <?php
                                if (isset($_SESSION['admin_error'])) {
                                    displayErrorMessage($_SESSION['admin_error']);
                                }
                                unset($_SESSION['admin_error']);
                                ?>
                                <button style="background-color: #007acc">Register Doctor</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../scripts/script.js"></script>
</body>
</html>
