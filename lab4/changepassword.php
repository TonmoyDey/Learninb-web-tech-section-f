<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
    <body>
        <table border="1">
            <tr><td>Xcompany</td><td>Logged in as <a href="dashbord.php"><php echo $_SESSION ?></a><a href="">| logout</a> </td></tr>
            <tr><td calspan="1">Account<hr>
             <li><a href="dashbord.php">Dashboard</a></li>
             <li><a href="viewprofile.php">View Profile</a></li>
             <li><a href="editprofile.php">Edit Profile</a></li>
             <li><a href="changeprofile.php">Change Profile Picture</a></li>
             <li><a href="changepassword.php">change Password</a></li>
             <li><a href="logout.php">logout</a></li>
            </td>
            <td> 
         <fieldset>
         <form method="post" action="changepasswordcheck.php" enctype="">
            <legend>CHANGE PASSWORD </legend><hr>
        CURRENR PASSWOED:
        <input type="text"name="name"value=""/>
        <br>
      
        New Password:
        <input type="text"name="email"value=""/>
        <br>
       
       Retype new passwprd:
        <input type="text"name="User_name"value=""/>
        <br><hr>
        <input type="submit"name="submit"/>
</td>
<?php
                            
                            if(isset($_SESSION['passwordchangeStatus']))
                            {
                                if($_SESSION['passwordchangeStatus'])
                                {
                                    unset($_SESSION['passwordchangeStatus']);
                                    echo "Password is changed";
                                }else echo "Password is not matching";
                            }
                            unset($_SESSION['passwordchangeStatus']);
                        ?>
        <tr><td> <center>Copyright © 2017</center></td>
</fieldset>
</body>
</html>
