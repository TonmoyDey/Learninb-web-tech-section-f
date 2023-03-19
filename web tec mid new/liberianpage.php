<?php 
    session_start();
    if(!isset($_SESSION['role']))
    {
        header('location: login.php');
    }
?>
<html>
    <form>
        <fieldset>
    <legend> <h1>LIBERIAN DASHBOARD</h1></legend>
    Reservation
        <ul>
            <li><a href="item_availability.php">Item Avaliable</a></li>
            <li><a href="reservation_queue.php">Reservation queue</a></li>
            <li><a href="reservation_history.php">Reservation histroy</a></li>
        </ul>
    Notification
    <ul> <li> <a href="createnotification.php">CreateNotification</a> </li>
         <li> <a href="viewNotification.php">ViewNotification</a> </li>
   </ul>
    
    Search
    <ul>
    <li><a href="search.php">Search</a></li>
    </ul>
    <form>
    
    publication
    <ul>
    <li><a href="add_new_publication.php">Adding new publication</a></li>
    <li><a href="publication.php">publication details</a></li>
    </ul>
    Borrow and return
    <ul>
    <li><a href="item_checkout.php">Item checkout</a></li>
    <li><a href="item_renewal.php">Item renewal</a></li>
    <li><a href="item_return.php">Item return</a></li>
    <li><a href="item_checkin.php">Item check in</a></li>
    </ul>
    <a href="logout.php">Logout</a>
    </form>
    </fieldset>
</html>

