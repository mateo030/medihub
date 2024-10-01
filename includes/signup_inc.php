<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'config/dbh.php';
    require_once 'models/signup_model.php';
    require_once 'controllers/signup_contr.php';
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];
    $gender = $_POST['gender'];
    $year = $_POST['year'];
    $month = str_pad($_POST['month'], 2, '0', STR_PAD_LEFT);
    $day = str_pad($_POST['day'], 2, '0', STR_PAD_LEFT);

    $errors = [];

    $timestamp = $year . $month . $day;
    $date = DateTime::createFromFormat('Ymd', $timestamp);
    if ($date) {
        $user_birthdate = $date->format('Y-m-d');
    } else {
        $user_birthdate = null;
    }
    
    // Error Handlers

    if(isInputEmpty($first_name, $last_name, $user_email, $user_pass, $user_address, $user_contact)) {
        array_push($errors, 'Input all fields');
    }

    if(isEmailValid($user_email)) {
        array_push($errors, 'Invalid email');
    }

    session_start();
    
    if($errors) {
        $_SESSION['error_signup'] = $errors;
        header('Location:../signup.php');
    }

    insert_patient($pdo, $first_name, $last_name, $user_email, $user_pass,  $user_address, $user_contact, $gender, $user_birthdate);    
    header('Location: ../index.php');

} else {
    header('Location: ../../index.php?=ErrorSignup');
}

