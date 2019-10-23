<?php
    function SignIn(){
        
        $connection=mysqli_connect("localhost","root","");
        if($connection==false) 
            die("could not connect");
        else
            // echo "Connection Successful";

        mysqli_select_db($connection,"test");
        session_start();
        if(!empty($_POST["uname"])){
            $query = "SELECT * FROM admin_info where username='$_POST[uname]' AND password = '$_POST[pwd]'";
            $result=mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
            if(!empty($row['username']) AND !empty($row['password'])){ 
                $_SESSION['username'] = $row['password']; 
                    header("Location: admin.php");
            }
            
            else{
                echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
            }
        }
        elseif (empty($_POST["uname"])){
                header("Location: home_page.php");
        }
    } 
    if(isset($_POST["submit"])){
        SignIn();
        
    }
    // mysqli_close($connection);

?>