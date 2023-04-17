<?php
require_once('../models/publication_model.php');

function insertPublicationController1($publicationName) {
    return insertPublication($publicationName);
}

if (isset($_POST['submit'])) {
    $publicationName = $_POST['publicationname'];
    if ($publicationName != "") {
        $result = insertPublicationController1($publicationName);
        if ($result) {
            $success = "Publication inserted successfully";
        } else {
            $error = "Error inserting publication";
        }
    } else {
        $error = "Publication name is required";
    }
}

require_once('../views/insert.php');

