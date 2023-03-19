<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <body>
        <p>Your response has been submitted</p><br>
        <button><a href="customerpage.php">BACK</a></button>
    </body>
</html>

