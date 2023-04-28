<?php
require_once('../models/publication.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $available_copies = $_POST['available_copies'];

    if (addPublication($title, $author, $isbn, $available_copies)) {
        header('Location: ../views/show_publications.php');
    } else {
        echo 'Error adding publication';
    }
}
?>