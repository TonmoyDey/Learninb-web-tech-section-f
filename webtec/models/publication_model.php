<?php
function connectToDatabase() {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lms";
    $con = mysqli_connect($servername, $username, $password, $dbname);
    return $con;
}

function insertPublication($publicationName) {
    $con = connectToDatabase();
    $query = "INSERT INTO ADDPUBLICATION VALUE('$publicationName')";
    $data= mysqli_query($con, $query);
    mysqli_close($con);
    if($data) {
        return true;
    } else {
        return false;
    }
}
