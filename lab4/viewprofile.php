<?php
session_start();
if(isset($_SESSION['flag'])){
?>



<html>
    <head>
        <title>View Profile</title>
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
            <td width="300">
                    <h3>    Account</h3>
                    <hr>
                    <ul>
                        <li> <a href="dashboard.php"> Dashboard</a></li>
                        <li> <a href="viewprofile.php"> View Profile</a></li>
                        <li> <a href="editprofile.php"> Edit Profile</a></li>
                        <li> <a href="changeprofilepicture.php"> Change Profile Picture</a></li>
                        <li> <a href="changepassword.php"> Change Password</a></li>
                        <li> <a href="logout.php"> Logout</a></li>
                    </ul>

                </td>
                <td>

<fieldset>
        <legend> PROFILE </legend>
        <table>
                    <tr>
                        <td>Name</td>
                        <td align="left"> :<?php echo $_SESSION['username'] ?>  </td>
                        
                        <td colspan="2" rowspan="3"> <img src="profilepicture.png"> </td>
                    </tr>
                    <tr>
                             <td>email</td>  
                             <td>:bob@aiub.edu</td>               
                    </tr>
                    <tr>
                            <td>Gender</td>  
                             <td>:Male</td> 
                    </tr>
                    <tr>
                             <td>Date Of Birth</td>  
                             <td>:19/09/1998</td> 
                             <td align="center"><a href="changeprofilepicture.php">Change </a> </td>
                    </tr>
                    <tr>
                        <td colspan="4"><a href="editprofile.php">Edit Profile </a></td>
                        
                    </tr>
        </table>
</fieldset>
</td>
</tr>
            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2017</td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>












               



















            
