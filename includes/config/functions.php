<?php

function displayOptions($limit, $floor) {
    for ($i = $floor; $i <= $limit; $i++) {
        echo '<option value="' . $i .'">' . $i . '</option>';
    }
}