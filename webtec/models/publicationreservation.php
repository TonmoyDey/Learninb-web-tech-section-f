<?php

function connectToDatabase() {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lms";
    $con = mysqli_connect($servername, $username, $password, $dbname);
    return $con;
}

function insertPublication($pbname) {
    $con = connectToDatabase();
    $query = "INSERT INTO RESERVATION VALUES ('$pbname')";
    $data= mysqli_query($con, $query);
    mysqli_close($con);
    if($data) {
        return true;
    } else {
        return false;
    }
}






