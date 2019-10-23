<?php
    function SignIn(){
        
        $username=$_POST["uname"];
        $password=$_POST["pwd"];
        $seed=substr($username,0,2);
        $enc_password=crypt($password,$seed);
        $connection=mysqli_connect("localhost","root","");
        if($connection==false) 
            die("could not connect");
        else
            // echo "Connection Successful";

        mysqli_select_db($connection,"test");
        session_start();

        if(!empty($_POST["uname"])){
            $query = "SELECT * FROM registration_form where User_Name='$_POST[uname]' AND Password = '$enc_password'";
            $result=mysqli_query($connection,$query);
            $row = mysqli_fetch_array($result);
            if(!empty($row['User_Name']) AND !empty($row['Password'])){ 
                //$_SESSION['User_Name'] = $row['Password']; 
				$_SESSION['User_Name'] = $_POST["uname"];
                header("Location: profile.php");
            }
            
            else{
                echo "<script> alert('SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...')</script>";
            }
        }
        elseif (empty($_POST["uname"])){
                header("Location: home_page.html");
                echo '<script type="text/javascript">'; 
                echo 'alert("You need to login first!")'; 
                echo '</script>';
                session_unset();
                session_destroy();
                header("location:home_page.html");
        }
    } 
    if(isset($_POST["submit"])){
        SignIn();
        
    }
    // mysqli_close($connection);

?>
