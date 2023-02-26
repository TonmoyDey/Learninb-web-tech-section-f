<?php
    session_start();
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <table border="1" height="500" width="600">
            <tr>
                <td>
                    <table border="1">
                        <tr heigth="100">
                            <td width="400">
                                <h1>Xcompany</h1>
                            </td>
                            <td>
                            <a href="public1.php">home</a>
                              <a href="login.php">login</a>
                              <a href="registration.php">Registration</a>
                            </td>
                        </tr>
                    </table>
                    <tr>
                        <td>
        
                           <form method="post" action="registrationCheck.php">
                           <fieldset>
                           <legend> Register </legend><hr>
                                      Name:
                                        <input type="text"name="name"value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>"/>
                                              <br>
      
                                       Email:
                                         <input type="email"name="email"value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>"/>
                                               <br>

                                     Password:
                                         <input type= "password" name="Password"value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>"/>
                                                <br>

                                          <fieldset>
                                             <legend>Gender</legend>
                                             <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked" ?> value="Male"/> Male
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked" ?> value="Female"/> Female
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Other') echo "checked" ?> value="Other"/> Other
                                               <br>
                                          </fieldset>
                                        <fieldset>
                                         <legend>date_of_birth<br></legend>
                                            <input type="date" name="dob" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/>
                                                <br>
                                        </fieldset>
   
                                               <hr>
    
                                         <input type="submit" name="" value="submit"/>
                                          <input type="reset" name="" value="reset"/>
                                       </fieldset>
                        </td>
                        <tr>
                            <td>
                            <?php
                                        
                                        if(isset($_SESSION['submit'])) 
                                        {
                                            if($_SESSION['password'] != $_SESSION['confirmPassword'])
                                            {
                                                echo "Password is not matching <br>";
                                                exit;
                                            } 
                                            
                                            foreach ($_SESSION as $key => $value) {
                                                if($key[0] != '#')
                                                if (!isset($_SESSION[$key]) or empty($value)) {
                                                    echo $key. " not given <br>";     
                                                    break;                                               
                                                }
                                            }

                                            if(!isset($_SESSION['gender']))
                                            {
                                                echo "gender is not given";
                                            }
                                            

                                        }
                                        
                                        
                                        
                                    ?>  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>Copyright@20017</center>
                            </td>
                        </tr>
                    </tr>
                </td>
            </tr>
        </table>
    </body>
</html>