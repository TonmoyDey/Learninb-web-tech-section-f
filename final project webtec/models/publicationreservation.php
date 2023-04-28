
<?php
require_once('db.php');

function insertPublication($pbname) {
    $con = getConnection();
    $query = "INSERT INTO RESERVATION VALUES ('$pbname')";
    $data= mysqli_query($con, $query);
    mysqli_close($con);
    if($data) {
        return true;
    } else {
        return false;
    }
}