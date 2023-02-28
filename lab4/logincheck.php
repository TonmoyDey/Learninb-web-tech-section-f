<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 

        if($username == "" && $password == "") {
            
            header('location: login.php');
        }
        else{
            if($username == $password){
                
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        echo "invalid request...";
    }
?>