<?php 
    session_start();

    if(isset($_REQUEST['submit'])){
        
        $Name = $_REQUEST['Name'];
        $Password = $_REQUEST['Password'];

        if($Name == "" && $Password == ""){
            echo"please enter information";

            
            
        }
        elseif($Name == 'customer' && $Password == 234)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: customerpage.php');
            }
            elseif($Name == 'admin' && $Password == 123)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: homepage.php');
            }
            elseif($Name == 'librian' && $Password == 345)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: liberianpage.php');
            }
            elseif($Name == 'member' && $Password == 456)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: memberpage.php');
            }else
            {
                echo "invalid user";
            }
        }
    
    else{
       
        header('location: login.php');
    }

?>