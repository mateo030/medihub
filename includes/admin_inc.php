<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'config/dbh.php';
    require_once 'models/admin_model.php';
    require_once 'controllers/admin_contr.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['doc_email'];
    $doc_pass = $_POST['doc_pass'];
    $address = $_POST['doc_address'];
    $phone = $_POST['doc_contact'];
    $specialization = $_POST['specialization'];

    $errors = [];

    if (isDocInputEmpty($first_name, $last_name, $email, $doc_pass, $address, $phone, $specialization)) {
        array_push($errors, 'Fill in all fields');
    }

    if (isEmailValid($email)) {
        array_push($errors, 'Invalid email');
    }

    session_start();

    if($errors) {
        $_SESSION['admin_error'] = $errors;
        header('Location:../dashboard/admin/admin_list.php');
    }

    registerDoctor($pdo, $first_name, $last_name, $specialization, $email, $phone, $doc_pass, $address);
    header('Location:../dashboard/admin/admin_list.php');

} else {
    echo 'ERROR';
}