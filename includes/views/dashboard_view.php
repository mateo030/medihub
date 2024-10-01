<?php

declare(strict_types=1);

function returnDoctorCount() {
    require_once '../../includes/models/dashboard_model.php';
    $count = count(fetchDoctors());

    return $count;
}

function displayAppointmentTable() {

    require_once '../../includes/models/dashboard_model.php';
    $appointments = returnAppointmentData();
    if(!empty($appointments)) {
        foreach ($appointments as $appointment);
        echo "<tr> $appointment";
        echo '<td>' . $appointment['id'] . '</td>';
        echo '<td>' . $appointment['appointment_date'] . '</td>';
        echo '<td>' . $appointment['appointment_time'] . '</td>';
        echo '<td>' . $appointment['first_name'] . " " . $appointment['last_name'] . '</td>';
        echo '<td>' . $appointment['phone'] . '</td>';
        echo '<td>' . 'View' . '</td>';
        echo '<td>' . '<button>Pending</button>' . '</td>';
        echo '</tr>';
    } else {
        echo '<tr>';
        echo '<td>' . 'You have not made any appointm ents yet' . '</td>';
        echo '</tr>';
    }
}

function displayDoctors() {
    require_once '../../includes/models/dashboard_model.php';
    $rows = fetchDoctors();
    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
        echo '<td>' . $row['specialization'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td style="text-align: right;"><a href="booking_form.php?id=' . $row['doctor_id'] . '">Book</a> <button id="modalBtn">Details</button></td>';
        echo '</tr>';
    }
}