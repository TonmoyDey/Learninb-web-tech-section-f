<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        
        if($username == "" && $password == "") {
            
            header('location: login!.php');
        }
        else{
            $file = fopen('index.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                
                if($username == trim($user[0]) && $password == trim($user[1]))
                {
                    $_SESSION['username']=$user[0];

                    $_SESSION['name']=$user[1];

                    $_SESSION['password']=$user[2];

                    $_SESSION['gender']=$user[3];

                    $_SESSION['email']=$user[4];

                    $_SESSION['role']=$user[5];

                    $_SESSION['flag'] = "true";

                    

                    if(isset($_REQUEST['rememberme']))
                    {
                        setcookie('rememberMe', true ,time()+123123,'/');
                    }
                    

                    if(trim($_SESSION['role']) == 'Admin')
                    {
                        header('location: searchManagement.php');
                        exit;
                    }
                    
                   
                }
            }
                    echo "User not found";
        }
    }else{
        echo "Request cannot be accepted";
    }
?>