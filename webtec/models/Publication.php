<?php


function searchPublications($searchText) {

  $con = mysqli_connect('127.0.0.1','root','','lms');

 
  $sql= "SELECT * FROM addpublication WHERE publicationName LIKE '%" . mysqli_real_escape_string($con, $searchText) . "%'";

 
  $query = mysqli_query($con, $sql);
  $publications = array();
  while($data = mysqli_fetch_assoc($query)) {
    $publications[] = $data;
  }

  mysqli_close($con);
  return $publications;
}

?>



