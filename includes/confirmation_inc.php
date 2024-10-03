<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    require_once 'config/dbh.php';
    require_once 'models/dashboard_model.php';
    require_once 'controllers/dashboard_contr.php';

    $appointment_id = $_GET['appointment_id'];

    confirmAppointment($appointment_id);

    header('Location: ../dashboard/doctor/doc_appointments.php');
}