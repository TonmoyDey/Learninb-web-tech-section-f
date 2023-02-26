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
                            <a href="">home</a>
                            <a href="">login</a>
                            <a href="">Registration</a>
                        </td>
                    </tr>
                   </table> 
                </td>
            </tr>
            <tr height="350">
                <td width="300">
                <fieldset>
            <legend><h1>LOGIN</h1></legend><hr>
        User name:
        <input type="text"name="name"value="<?php echo isset($_SESSION['lusername']) ? $_SESSION['lusername'] : ''  ?>"/>
        <br><hr>
         Password:
        <input type="text"name="email"value=""/>
        <br>
        <input type="checkbox"name=""value=""/>Remember Me<br>
        <input type="submit"name="submit"/>
        <a href="">Forget Password</a>
        <tr>
            <td>
                <?php
                if(isset($_SESSION['upw']))
                {
                    echo "username or password is not correct";
                }
                
                ?>
            </td>
        </tr>
    </fieldset>
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
<?php
    unset($_SESSION['upw']);
    unset($_SESSION['lusername']);
?>