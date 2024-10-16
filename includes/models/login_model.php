<?php

declare(strict_types=1);

$pdo = connect_DB();

function login($pdo, $user_email, $user_pass) {

    $query = 'SELECT * FROM patients WHERE user_email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $rows = $stmt->fetchAll();

    foreach ($rows as $row) {

        if ($user_email == $row['user_email'] && $user_pass == $row['user_pass']) {

            session_start();
            $_SESSION['patient_id'] = $row['patient_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['contact_number'] = $row['contact_number'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['birth_date'] = $row["birth_date"];

            if ($_SESSION['first_name'] == 'Administrator') {
                header('Location: ../dashboard/admin/dashboard.php');
            } else {
                header('Location: ../dashboard/patient/dashboard.php');
            }
            

        } else {
            echo 'ERROR';
        }

    }
}

function doctorLogin($pdo, $user_email, $user_pass) {
    $query = 'SELECT * FROM doctors WHERE email = :user_email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $rows = $stmt->fetchAll();

    foreach ($rows as $row) {

        if ($user_email == $row['email'] && $user_pass == $row['doc_pass']) {

            session_start();
            $_SESSION['doctor_id'] = $row['doctor_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['contact_number'] = $row['contact_number'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['address'] = $row['address'];

            header('Location: ../dashboard/doctor/dashboard.php');

        } else {
            echo 'ERROR';
        }

    }
}
