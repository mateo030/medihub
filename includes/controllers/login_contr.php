<?php

declare(strict_types=1);

function user_exists($pdo, $user_email) {

    $query = 'SELECT * FROM patients WHERE user_email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $user = $stmt->fetchAll();

    if ($user) {
        return true;
    } else {
        return false;
    }

}

function isInputEmpty($user_email, $user_pass) {
    if (empty($user_email) || empty($user_pass)) {
        return true;
    } else {
        return false;
    }
}