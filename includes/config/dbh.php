<?php

function connect_DB() {
    $db_user = 'root';
    $db_pass = '';
    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=clinic_data',$db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    } catch(ErrorException $e) {
        echo 'ERROR: ' . $e;
    }
}
