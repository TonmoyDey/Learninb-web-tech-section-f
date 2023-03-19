<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
     
        $username = $_REQUEST['username']; 
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender']; 
        $password = $_REQUEST['password']; 
        $confirmpassword= $_REQUEST['confirmpassword'];
        $role=$_REQUEST['role'];

        if($username == "" || $password == "" ||empty($name)|| $email == "" || empty($gender)||empty($role)) {
            echo "null value";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password not matching";
            
        }
        elseif( strlen(trim($_REQUEST['password'])) < 4) {
            echo "Password must have at least 4 characters";
         } else{
            $file = fopen('user.txt', 'a');
            $user = $username."|".$password."|".$name."|".$email."|".$gender."|".$role."\r\n";
            fwrite($file, $user);
            header('location: login.php');
    {
        echo "invalid user.";
    }
  }
}
?>