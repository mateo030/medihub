<?php

if($_SERVER['REQUEST_METHOD'] == 'GET') {

    require_once 'config/dbh.php';
    require_once 'models/login_model.php';
    require_once 'controllers/login_contr.php';

    $user_email = $_GET['user_email'];
    $user_pass = $_GET['user_pass'];

    //Error Handlers

    $errors = [];

    if (!doctorExists($pdo, $user_email)) {
        array_push($errors, 'Your email does not exist');
    }

    if(isInputEmpty($user_email, $user_pass)) {
        array_push($errors, 'Input all fields');
    }

    if(docPassIsIncorrect($pdo, $user_email, $user_pass)) {
        array_push($errors,'Username or password is incorrect!');
    }

    session_start();

    if($errors) {
        $_SESSION['error_login'] = $errors;
        header('Location:../doctors.php');
    }

    doctorlogin($pdo, $user_email, $user_pass);
}