<?php
session_start();
if(isset($_SESSION['flag'])){
}
?>



<html>
    <head>
        <title>Change Profile Picture</title>
    </head>
    <body>
    <center>
        <table border ="1" height=300 width=600>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "600">
                    <tr>
                        <td>
                            <h1>Xcompany</h1>
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['username'] ?></a> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
</html>