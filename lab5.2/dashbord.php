<?php
    session_start();
    if(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time())
    {
        header('Location: dashboard.php');
    }
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <table border="1"height="500"width="500">
            <tr>
                <td>
                   <table>
                    <tr heigth="80">
                        <td width="300">
                            <h1>Xcompany</h1>
                        </td>
                        <td>
                        <tr><td>Xcompany</td><td>Logged in as <a href="dashbord.php"><php echo $_SESSION ?></a><a href="">| logout</a> </td></tr>
                         <tr>
                        </td>
                    </tr>
                   </table> 
                </td>
            </tr>
            <tr height="350">
                <td width="300">
                <fieldset>
                <td>Account<hr>
             <li><a href="dashbord.php">Dashboard</a></li>
             <li><a href="viewprofile.php">View Profile</a></li>
             <li><a href="editprofile.php">Edit Profile</a></li>
             <li><a href="changeprofile.php">Change Profile Picture</a></li>
             <li><a href="changepassword.php">change Password</a></li>
             <li><a href="logout.php">logout</a></li>
            </td>
            <td><fieldset>
                </td>
            </tr>
            <tr height="30">
                <td>
                    <center>
                        Copyright@2017
                    </center>
                </td>

            </tr>
        </table>
    </body>
</html>
