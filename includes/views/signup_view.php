<?php 

declare(strict_types=1);

function displaySignupError($errors) {

    foreach ($errors as $error) {
        echo '<div class="error__message">';
        echo '<p>' . $error . '</p>';
        echo '</div>';
    }
}