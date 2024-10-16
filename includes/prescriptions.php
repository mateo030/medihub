<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'config/dbh.php';
    require_once 'models/dashboard_model.php';
    require_once 'controllers/dashboard_contr.php';

    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $patient_id = $_POST['patient_id'];
    $medication = $_POST['medication'];
    $dosage = $_POST['dosage'];
    $duration = $_POST['duration'];
    $notes = $_POST['notes'];
    
    try {
        
        insertPrescription($patient_id, $doctor_id, $medication, $dosage, $duration, $notes);
        header('Location:../dashboard/doctor/doc_prescriptions.php');

    } catch (Exception $e) {
        echo 'Error: ' , $e;
    }
}