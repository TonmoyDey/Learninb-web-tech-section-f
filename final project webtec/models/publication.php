<?php
require_once('db.php');

function addPublication($title, $author, $isbn, $available_copies){
    $conn = getConnection();
    $title = mysqli_real_escape_string($conn, $title);
    $author = mysqli_real_escape_string($conn, $author);
    $isbn = mysqli_real_escape_string($conn, $isbn);
    $available_copies = mysqli_real_escape_string($conn, $available_copies);
    $sql = "INSERT INTO publication (title, author, isbn, available_copies) VALUES ('$title', '$author', '$isbn', '$available_copies')";
    $status = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $status;
}

function getPublications() {
    $conn = getConnection();
    $sql = "SELECT * FROM publication";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error retrieving publications: " . mysqli_error($conn));
    }

    $publications = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $publications[] = $row;
    }

    mysqli_close($conn);
    return $publications;
}

function borrowPublication($id, $user){
    $conn = getConnection();
    $id = mysqli_real_escape_string($conn, $id);
    $user = mysqli_real_escape_string($conn, $user);
    $sql_borrow = "INSERT INTO borrow_return (publication_id, user, borrow_date) VALUES ('$id', '$user', NOW())";
    $sql_update = "UPDATE publication SET available_copies = available_copies - 1 WHERE id = '$id' AND available_copies > 0";
    $status_borrow = mysqli_query($conn, $sql_borrow);
    $status_update = mysqli_query($conn, $sql_update);
    mysqli_close($conn);
    return $status_borrow && $status_update;
}

function returnPublication($id, $user){
    $conn = getConnection();
    $id = mysqli_real_escape_string($conn, $id);
    $user = mysqli_real_escape_string($conn, $user);
    $sql_return = "UPDATE borrow_return SET return_date = NOW() WHERE publication_id = '$id' AND user = '$user' AND return_date IS NULL";
    $sql_update = "UPDATE publication SET available_copies = available_copies + 1 WHERE id = '$id'";
    $status_return = mysqli_query($conn, $sql_return);
    $status_update = mysqli_query($conn, $sql_update);
    mysqli_close($conn);
    return $status_return && $status_update;
}
?>