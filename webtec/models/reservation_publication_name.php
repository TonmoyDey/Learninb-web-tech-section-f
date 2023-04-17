<?php

function getPublications() {
    $con = mysqli_connect("127.0.0.1","root","","lms");
    if (mysqli_connect_errno())
    {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $query = "SELECT pbname FROM RESERVATION";
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    
    return $result;
}
