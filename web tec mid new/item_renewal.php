<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <body>
        <form action="message.php" method="POST">

          Book name:
              <input type="text" nmae="Book name"Value=""/>
               <br>
            Renewal time:
               <br>
               <input type="radio" name="Renewal time" Value=""/>5
               <input type="radio" name="Renewal time" Value=""/>7
               <input type="radio" name="Renewal time" Value=""/>10
               <br>
               <button>SUBMIT</button>
               <br>
              

        </form>
    </body>
</html>

