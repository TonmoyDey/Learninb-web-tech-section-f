<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <center>
        <table border ="1" height=300 width=600>
            <tr height=70>
                <td >
                     <table width = "600">
                    <tr>
                        <td>
                            <h1>Xcompany</h1>
                        </td>
                        <td align="right">
                    <a href="public1.php">Home</a>  <a href="login.php">| Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>        <form >
                            <fieldset>
                                <legend>REGISTRATION</legend>
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td>:<input type="text" name="name" value=""/> <br></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Email</td>
                                        <td>:<input type="email" name="email" value=""/> <br>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:<input type="text" name="username" value=""/> <br></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:<input type="password" name="password" value=""/> <br></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm Password</td>
                                        <td>:<input type="password" name="confirmpassword" value=""/> <br> </td>
                                        
                                    </tr>
                                </table>
                                <fieldset>
                                    <Legend>Gender</Legend>
            
                                         <input type="radio" name="gender" value="Male"/> Male
                                         <input type="radio" name="gender" value="Female"/> Female
                                        <input type="radio" name="gender" value="Other"/> Other <br>
                                 </fieldset>
                                 <h1></h1>
                                 <fieldset>
                                  <Legend>Date of Birth</Legend>
            
                                          <input type="date" name="dob" value=""/> 
           
                                            
                    
                                              </fieldset> 
                                              <h1></h1>
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset">
            </fieldset>
        </form>
</td>
            </tr>
            <tr height =40>
            <td> <center>Copyright © 2017</center></td>
            </tr>
        </table>
    </center>
    </body>
</html>
