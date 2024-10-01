<?php 

declare(strict_types=1);

$pdo = connect_DB();

function registerDoctor($pdo, $first_name, $last_name, $specialization, $email, $phone, $doc_pass, $address) {

    $query = 'INSERT INTO doctors (first_name, last_name, specialization, phone, email, doc_pass, address) VALUES (:first_name, :last_name, :specialization, :phone, :email, :doc_pass, :address)';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':specialization', $specialization);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':doc_pass', $doc_pass);
    $stmt->bindParam(':address', $address);
    
    $stmt->execute();

}

function fetchDoctors() {

    $pdo = connect_DB();

    $query = 'SELECT * FROM doctors';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}