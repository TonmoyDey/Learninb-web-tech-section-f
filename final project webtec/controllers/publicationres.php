<?php
require_once('../models/publicationreservation.php');

function insertPublicationres($publicationName) {
    return insertPublication($publicationName);
}

if (isset($_POST['submit'])) {
    $pbname = $_POST['pubname'];
    if ($pbname != "") {
        $result = insertPublicationres($pbname);
        if ($result) {
            $success = "Publication inserted successfully";
        } else {
            $error = "Error inserting publication";
        }
    } else {
        $error = "Publication name is required";
    }
}

require_once('../views/reservation.php');