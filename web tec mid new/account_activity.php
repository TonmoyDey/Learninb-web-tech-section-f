<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?><html>
    <body>
      <form>
        
      <a href="payment_history.php">Account_activity</a>

    
</form>
    </body>
</html>

