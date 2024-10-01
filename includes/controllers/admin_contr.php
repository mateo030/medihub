<?php

function isDocInputEmpty($first_name, $last_name, $doc_email, $doc_pass, $doc_address , $doc_contact, $specialization) {
    if (empty($first_name) || empty($last_name) || empty($doc_email) || empty($doc_pass) || empty($doc_address) || empty($doc_contact) || empty($specialization)) {
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