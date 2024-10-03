<?php

function fetchDoctors() {

    $pdo = connect_DB();
    $query = 'SELECT * FROM doctors';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();

}

function fetchPatients() {
    $pdo = connect_DB();
    $query = 'SELECT * FROM patients';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function returnAppointmentData($user_id, $status) {

    $pdo = connect_DB();
    $query = 'SELECT appointments.*, 
    patients.first_name AS patient_first_name, 
    patients.last_name AS patient_last_name, 
    doctors.first_name AS doctor_first_name, 
    doctors.last_name AS doctor_last_name,  
    doctors.phone AS doctor_phone,
    patients.contact_number AS patient_contact_number,
    patients.user_email AS patient_email,
    patients.gender AS patient_gender,
    patients.address AS patient_address
    FROM appointments INNER JOIN patients ON appointments.patient_id=patients.patient_id 
    INNER JOIN doctors ON appointments.doctor_id=doctors.doctor_id 
    WHERE appointments.patient_id = :patient_id AND appointments.status = :status';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':patient_id', $user_id);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function insertAppointment($patient_id, $doctor_id, $appointment_date, $appointment_time) {

    $pdo= connect_DB();
    $query = 'INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time) VALUES (:patient_id, :doctor_id, :appointment_date, :appointment_time)';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':patient_id', $patient_id);
    $stmt->bindParam(':doctor_id', $doctor_id);
    $stmt->bindParam(':appointment_date', $appointment_date);
    $stmt->bindParam(':appointment_time', $appointment_time);
    $stmt->execute();

}

function confirmAppointment($appointment_id) {

    $pdo = connect_DB();
    $query = 'UPDATE appointments SET status = "Confirmed" WHERE appointment_id = :appointment_id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':appointment_id', $appointment_id);
    $stmt->execute();

}