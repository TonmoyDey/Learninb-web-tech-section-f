<?php

require_once '../models/notification.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'view';

$notification = new Notification();

switch ($action) {
    case 'create':
        $title = $_POST['title'];
        $description = $_POST['description'];
        $result = $notification->createNotification($title, $description);
        if ($result) {
            header('Location: index.php');
        }
        break;
    case 'delete':
        $id = $_POST['id'];
        $result = $notification->deleteNotification($id);
        if ($result) {
            header('Location: index.php');
        }
        break;
    default:
        $notifications = $notification->getNotifications();
        break;
}

?>
