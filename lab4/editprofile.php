<?php
session_start();
if(isset($_SESSION['flag'])){
?>



<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
    <center>
        <table border ="1" height=400 width=800>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="70" src="xcompany.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['username'] ?></a> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>
</html>