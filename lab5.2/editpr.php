<html>
    <body>
        <table border="2">
            <tr><td>Xcompany</td><td>Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a></td></tr>
            <tr><td calspan="1">Account<hr>
            <li><a href="dashbord.php">Dashboard</a></li>
             <li><a href="viewprofile.php">View Profile</a></li>
             <li><a href="editprofile.php">Edit Profile</a></li>
             <li><a href="changeprofile.php">Change Profile Picture</a></li>
             <li><a href="changepassword.php">change Password</a></li>
             <li><a href="logout.php">logout</a></li>
            </td>
            <td> 
            <td><fieldset>
            <legend>EDIT PROFILE</legend><hr>
        Name:
        <input type="text"name="#name"value=""<?php echo isset($_SESSION['#name']) ? $_SESSION['#name'] : '' ?>">"/>
        <br><hr>
      
        Email:
        <input type="text"name="email"value="<?php echo isset($_SESSION['#email']) ? $_SESSION['#email'] : '' ?>"/>
        <br><hr>
        
            Gender
            <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Male') echo "checked" ?> value="Male"/> Male
             <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Female') echo "checked" ?> value="Female"/> Female
            <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
        <br><hr>
   
        date_of_birth
        <input type="date" name="#dob" value="<?php echo isset($_SESSION['#dob']) ? $_SESSION['#dob'] : '' ?>">
        <br><hr>
        <input type="submit"name="submit"/>
    </fieldset>
    </td></tr>
            <tr>
         <td>
         <?php
                                            
                                            if(isset($_SESSION['#submit'])) 
                                            {
                                                
                                                foreach ($_SESSION as $key => $value) {
                                                    if (!isset($_SESSION[$key]) or empty($value)) {
                                                        echo $key. " not given! <br>";     
                                                        break;                                               
                                                    }
                                                }
                                            }
                                        ?>

         </td>
         <td>copyright@2017</td>
</tr>
        </table>
    </body>
</html