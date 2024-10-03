<?php

declare(strict_types=1);

function userExists($pdo, $user_email) {

    $query = 'SELECT * FROM patients WHERE user_email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $user = $stmt->fetchAll();


    if (!$user) {
        return false;
    }

    return true;
}

function doctorExists($pdo, $user_email) {

    $query = 'SELECT * FROM doctors WHERE email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $user = $stmt->fetchAll();


    if (!$user) {
        return false;
    }

    return true;

}

function isInputEmpty($user_email, $user_pass) {
    if (empty($user_email) || empty($user_pass)) {
        return true;
    } 

    return false;

}