<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login!.php');
    }
?>
<html>

    <body>
        
          <form>
            <fieldset>
                <legend>Search Management</legend>
                <ul>
                    <li><a href="searchSpecification.php">Search Specification</a></li>
                    <li><a href="searchFeature.php">Search Feature</a></li>
                    <li><a href="searchApp.php">Search App</a></li>
                </ul>
                <a href="logout.php">LOGOUT</a>
                
            </fieldset>
          </form>

    </body>

</html>