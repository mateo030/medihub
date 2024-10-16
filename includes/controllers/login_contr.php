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

function passwordIsIncorrect($pdo, $user_email, $user_pass) {
    $query = 'SELECT * FROM patients WHERE user_email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $rows = $stmt->fetchAll();

    foreach($rows as $row) {
        if ($user_email == $row['user_email'] && $user_pass == $row['user_pass']) {
            return false;
        } else {
            return true;
        }
    }
}

function docPassIsIncorrect($pdo, $user_email, $user_pass) {
    $query = 'SELECT * FROM doctors WHERE email = :email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $user_email);
    $stmt->execute();
    $rows = $stmt->fetchAll();

    foreach($rows as $row) {
        if ($user_email == $row['email'] && $user_pass == $row['doc_pass']) {
            return false;
        } else {
            return true;
        }
    }
}