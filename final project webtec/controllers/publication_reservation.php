<?php

if(isset($_POST['resevation_check_text'])){
    $resevation_check_text = trim($_POST['resevation_check_text']);

    if(empty($resevation_check_text)){
        $error = "Search can't be blank.";
    } else {
        $con = mysqli_connect('127.0.0.1','root','','lms');
        $search_text = mysqli_real_escape_string($con, $resevation_check_text);
        $sql= "SELECT * FROM reservation WHERE pbname LIKE '%$resevation_check_text%'";
        $query = mysqli_query($con, $sql);

        if(mysqli_num_rows($query)>0) {
            while($data = mysqli_fetch_assoc($query)) {
                $publications[] = $data;
            }
        } else {
            $error = "No results found.";
        }

        mysqli_close($con);
    }
}

include('../views/reservation_check_publication.php');

?>

