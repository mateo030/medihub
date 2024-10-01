<?php

declare(strict_types=1);

$pdo = connect_DB();

function insert_patient($pdo, $first_name, $last_name, $user_email, $user_pass, $user_address, $user_contact, $gender, $user_birthdate) {

    $query = 'INSERT INTO patients (first_name, last_name, contact_number, user_email, user_pass, gender, address, birth_date) VALUES (:first_name, :last_name, :contact_number, :user_email, :user_pass, :gender, :address, :birth_date)';

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':contact_number', $user_contact);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->bindParam(':user_pass', $user_pass);
    $stmt->bindParam(':address', $user_address);
    $stmt->bindParam(':birth_date', $user_birthdate);
    $stmt->bindParam(':gender', $gender);

    $stmt->execute();
}