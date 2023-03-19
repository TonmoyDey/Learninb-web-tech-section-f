<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>

<body>
   <form>
        <a href="item_availability.php">All Books</a>

   </form>    

</body>

</html>

