<?php

declare(strict_types=1);

function isInputEmpty($first_name, $last_name, $email, $user_pass, $user_address, $user_contact) {
    if (empty($first_name) || empty($last_name) || empty($email) || empty($user_pass) || empty($user_address) || empty($user_contact)) {
        return true;
    } else {
        return false;
    }
}

function isEmailValid($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}