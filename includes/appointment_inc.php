<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'config/dbh.php';
    require_once 'models/dashboard_model.php';
    require_once 'controllers/dashboard_contr.php';

    session_start();

    $patient_id = $_SESSION['patient_id'];
    $doctor_id = $_POST['doctor_id'];  
    $appointment_month = $_POST['month'];
    $appointment_day = $_POST['day'];
    $appointment_time = $_POST['time'];

    $timestamp = '2024' . $appointment_month . $appointment_day;

    $date = DateTime::createFromFormat('Ymd', $timestamp);
    $appointment_date = $date->format('Y-m-d');

    try {

        insertAppointment($patient_id, $doctor_id, $appointment_date, $appointment_time);
        header('Location: ../dashboard/patient/appointments.php');

    }catch (Exception $e) {
        echo $e;
    }
}