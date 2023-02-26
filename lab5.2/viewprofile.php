<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>
<html>
    <head>
        <title>
            View Profile
        </title>
    </head>

    <body>
        <table border="1" height="100"width="450">
            <tr>
                <td>
                    <table>
                        <tr height="100">
                            <td width="400">
                                <h1>Xcompany</h1>
                            </td>
                                <td >
                                logged in as <a href="dashbord.php"><?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a> 
                                </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <table border="1">
                <tr>
                    <td>
                        
                             <tr>
                                <td>
                                    <h1>Account</h1><hr>
                                    <li><a href="loggedin.php">Dashboard</a></li>
                                    <li><a href="viewprofile.php">View Profile</a></li>
                                    <li><a href="editprofile.php">Edit Profile</a></li>
                                    <li><a href="profilepicture.php">Change Profile Picture</a></li>
                                    <li><a href="changepassword.php">change Password</a></li>
                                    <li><a href="logout.php">logout</a></li>

                                </td>
                                <td>
                                <fieldset>
                                     <legend> PROFILE</legend><hr>
                                            Name:
                                            <input type="text"name="name"value=""/>
                                            <br><hr>
      
                                            <td>Email</td>
                                           <td><?php echo ":<b>  ".$_SESSION['#email']."</b>"?> </td>
                                           <td></td>
        
                                           <tr>
                                            <td>Gender</td>
                                            <td><?php echo ":<b>  ".$_SESSION['#gender']."</b>"?> </td>
                                               <td align="center"><a href="changeProfilePicture.php">Change</a> </td>
                                               <td></td>
                                          </tr>
   
                                          <tr>
                            <td>Date of Birth</td>
                            <td><?php echo ":<b>  ".$_SESSION['#dob']."</b>"?> </td>
                            <td></td>
                            <tr>
                            <td><a href="edit.php">Edit Profile</a></td>
                        </tr> 
                        </tr>
                                </fieldset>
                             </td>
                                
                             </tr>
                        
                    </td>
                </tr>
                <table>
                    <tr>
                        <td>
                            <table border="1" heigth="50"width="450">
                                <tr>
                                    <td>
                                        <center>copyright@2017</center>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </table>
        </table>
       
    </body>
</html>