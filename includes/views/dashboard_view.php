<?php

declare(strict_types=1);

function displayDoctors() {
    require_once '../../includes/models/dashboard_model.php';
    $rows = fetchDoctors();

    foreach ($rows as $row) {
        ?>
            <tr >
                <td><?=  $row['first_name'] . " " .$row['last_name'] ?></td>
                <td><?=  $row['specialization']?></td>
                <td><?=  $row['phone']?></td>
                <td><?=  $row['email']?></td>
                <td style="text-align: right;"><a href="booking_form.php?id=<?= $row['doctor_id'] ?>">Book</a></td>
            </tr>
        <?php
    }
}

function displayPatients($user_id) {
    require_once '../../includes/models/dashboard_model.php';
    $rows = returnAppointmentData($user_id, 'Confirmed');

    foreach ($rows as $row) {
        ?>
            <tr >
                <td><?=  $row['patient_first_name'] . " " .$row['patient_last_name'] ?></td>
                <td><?=  $row['patient_contact_number']?></td>
                <td><?=  $row['patient_email']?></td>
                <td><?=  $row['patient_gender']?></td>
                <td><?= $row['patient_address']?></td>
            </tr>
        <?php
    }
}

function returnPatientCount($user_id) {
    require_once '../../includes/models/dashboard_model.php';
    $count = count(returnAppointmentData($user_id, 'Confirmed'));

    return $count;
}

function returnDoctorCount() {
    require_once '../../includes/models/dashboard_model.php';
    $count = count(fetchDoctors());

    return $count;
}

function returnAppointmentCount($user_id, $status) {
    require_once '../../includes/models/dashboard_model.php';
    return count(returnAppointmentData($user_id, $status));
}

function displayAppointmentTable($user_id, $status) {

    require_once '../../includes/models/dashboard_model.php';
    $rows = returnAppointmentData($user_id, $status);

    if (!empty($rows)) {
        foreach($rows as $row) {
        ?>
            <tr>
                <td><?= $row['appointment_id'] ?></td>
                <td><?= $row['appointment_date'] ?></td>
                <td><?= $row['appointment_time'] ?></td>
                <td><?php if (isset($_SESSION['doctor_id'])) { ?> <?= $row['patient_first_name'] . " " .$row['patient_last_name'] ?> <?php ;} else { ?> <?= $row['doctor_first_name'] . " " .$row['doctor_last_name'] ?> <?php ; }?></td>
                <td><?= $row['doctor_phone'] ?></td>
                <td><?php if (isset($_SESSION['doctor_id']) && $row['status'] == 'Pending') { ?> <form action="../../includes/confirmation_inc.php" method="GET"><input type="hidden" name="appointment_id" value="<?= $row['appointment_id']?>"><button>Confirm Appointment</button></form> <?php ;} else { ?> Prescriptions <?php ; }?></td>
                <td style="<?php if($row['status'] == 'Pending') {echo 'color: #FFDB39';}?>"><?= $row['status'] ?></td>
            </tr>
        <?php
        }
    }
}

function displayMiniAppointmentTable($user_id) {
    require_once '../../includes/models/dashboard_model.php';
    $rows = returnAppointmentData($user_id, 'Confirmed');

    if (!empty($rows)) {
        foreach($rows as $row) {
            if($row['status'] == 'Completed') {
                ?>
                <tr>
                    <td><?= $row['appointment_id'] ?></td>
                    <td><?= $row['appointment_date'] ?></td>
                    <td><?= $row['appointment_time'] ?></td>
                    <td><?= $row['doctor_first_name'] . " " . $row['doctor_last_name'] ?></td>
                </tr>
                <?php
            }
        }
    }
}

function displayMiniDocAppointments($user_id) {
    require_once '../../includes/models/dashboard_model.php';
    $rows = returnAppointmentData($user_id, 'Confirmed');

    if (!empty($rows)) {
        foreach($rows as $row) {
        ?>
            <tr>
                <td><?= $row['appointment_id'] ?></td>
                <td><?= $row['appointment_date'] ?></td>
                <td><?= $row['appointment_time'] ?></td>
                <td><?= $row['patient_first_name'] . " " . $row['patient_last_name'] ?></td>
            </tr>
        <?php
        }
    }
}


