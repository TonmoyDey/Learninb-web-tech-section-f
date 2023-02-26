<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
   
?>
<html>
    <body>
        <table border="2">
            <tr><td>Xcompany</td><td>Logged in as <a href="dashbord.php"><?php echo $_SESSION ['#username']?></a>|<a href="logout.php">| logout</a> </td></tr>
            <tr><td>Account<hr>
             <li><a href="dashbord.php">Dashboard</a></li>
             <li><a href="viewprofile.php">View Profile</a></li>
             <li><a href="editprofile.php">Edit Profile</a></li>
             <li><a href="changeprofile.php">Change Profile Picture</a></li>
             <li><a href="changepassword.php">change Password</a></li>
             <li><a href="logout.php">logout</a></li>
            </td>
            <td><fieldset>
            <legend>Profile Picture</legend><br>
            <form method="post" action="changeprofilepicturecheck.php" enctype="multipart/form-data">
            <input type="choose file" name="" value="choose file"/> <a href="">No file chosen</a><br>
            <input type="submit" name="" value="submit"/> 
           <tr>
            <td>
                <center>Copyright@2017</center>
            </td>
           </tr>
                
                
           
</table>
</body>
</html>