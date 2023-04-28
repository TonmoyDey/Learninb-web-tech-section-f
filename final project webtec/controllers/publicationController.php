<?php

if(isset($_POST['search_text'])){
    $search_text = trim($_POST['search_text']);

    if(empty($search_text)){
        $error = "Search can't be blank.";
    } else {
        $con = mysqli_connect('127.0.0.1','root','','lms');
        $search_text = mysqli_real_escape_string($con, $search_text);
        $sql= "SELECT * FROM publication WHERE title LIKE '%$search_text%'";
        $query = mysqli_query($con, $sql);

        if(mysqli_num_rows($query)>0) {
            while($data = mysqli_fetch_assoc($query)) {
                $publications[] = $data;
            }
        } else {
            $error = "No results found.Please insert the request of this publication in 'Insert reservation'";
        }

        mysqli_close($con);
    }
}

include('../views/search_publication.php');

?>