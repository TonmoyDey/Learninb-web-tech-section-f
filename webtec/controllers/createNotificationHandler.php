<?php

require_once '../models/notification.php';

$notification = new Notification();

$title = $_POST['title'];
$description = $_POST['description'];

$result = $notification->createNotification($title, $description);

if ($result) {
    header('Location: index.php');
} else {
    echo 'Failed to create notification.';
}

?>