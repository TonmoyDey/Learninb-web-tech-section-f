<?php
require_once('../models/publication.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $user = $_POST['user'];
    $action = $_POST['action'];

    if ($action == 'borrow') {
        if (borrowPublication($id, $user)) {
            header('Location: ../views/show_publications.php');
        } else {
            echo 'Error borrowing publication';
        }
    } elseif ($action == 'return') {
        if (returnPublication($id, $user)) {
            header('Location: ../views/show_publications.php');
        } else {
            echo 'Error returning publication';
        }
    }
}
?>