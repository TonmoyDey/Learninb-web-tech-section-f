<?php

require_once 'db.php';

class Notification {
    public function createNotification($title, $description) {
        $conn = getConnection();
        $sql = "INSERT INTO notifications (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    public function getNotifications() {
        $conn = getConnection();
        $sql = "SELECT * FROM notifications";
        $result = mysqli_query($conn, $sql);
        $notifications = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn);
        return $notifications;
    }
}

?>
