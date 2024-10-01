<?php

function fetchDoctors() {

    $pdo = connect_DB();
    $query = 'SELECT * FROM doctors';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();

}

function returnAppointmentData() {

    $pdo = connect_DB();
    $query = 'SELECT * FROM appointments';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();

}