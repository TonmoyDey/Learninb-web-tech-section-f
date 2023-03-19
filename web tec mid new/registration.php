<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <table  height="500" width="700">
            <tr>
                <td>
                    <form method="POST" action="regcheck.php" >
                        <fieldset>
                            <legend><h2>REGISTRATION</h2></legend>
                            <table>
                                <tr>
                                 <td>Name :<input type="text" name="name" value=""/> <br>
                                     Email:<input type="email" name="email" value=""/> <br>
                                  Username:<input type="text" name="username" value=""/> <br>
                                  Password:<input type="password" name="password" value=""/> <br>
                          Confirm Password:<input type="password" name="confirmpassword" value=""/> <br>
                                <fieldset>
                            <Legend>Gender</Legend>
                                          <input type="radio" name="gender" value="Male"/> Male
                                          <input type="radio" name="gender" value="Female"/> Female
                                          <input type="radio" name="gender" value="Other"/> Other <br>
                                </fieldset>
                                 <fieldset>
                                  <Legend>Date of Birth</Legend>
                                    <input type="date" name="dob" value=""/> 
                                 </fieldset><br> 
                                 <Legend>Role</Legend>
                                          <input type="radio" name="" value="Admin"/> Admin
                                          <input type="radio" name="" value="customer"/> Customer
                                          <input type="radio" name="" value="member"/> Member <br>
                            <input type="reset" name="reset" value="Reset">
            </fieldset>
        </form>
</table>
    </body>
</html>