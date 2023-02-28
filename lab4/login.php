<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table border ="1" height=400 width=800>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            <img height="70" src="xcompany.png">
                        </td>
                        <td align="right">
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>        <form method="POST" action="logincheck.php"  >
                            <fieldset>
                                <legend>LOGIN</legend>
                             Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="radio" name="rememberme" value=""/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>
                            <a href="forgetpassword.php">Forgot Password?</a>  
            </fieldset>
        </form>
</td>
            </tr>
            <tr height =40>
                <td align="center">Copyright © 2017</td>
            </tr>
        </table>
    </center>
    </body>
</html>