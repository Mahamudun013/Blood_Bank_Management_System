<?php 
	// delete request info
	$msg2 = "Your request has been rejected.And please try again later.";
    if(isset($_GET["user"])){
        $usrname=$_GET["user"];
        $conn=mysqli_connect("localhost","root","");
        if($conn==false){
            die("could not connect");
        }
        else{
        //echo "Connection successfull";
        }
        mysqli_select_db($conn,"test");
		//message
        $qmsg2="SELECT message from confirmation_message where username='$usrname'";
        $resmsg2 = mysqli_query($conn,$qmsg2);
        $rowmsg2 = mysqli_fetch_array($resmsg2);
        $msgr = $rowmsg2['message'];
        if($msgr==null){
		  $qurw = "INSERT into confirmation_message values('$usrname','$msg2')";
		  mysqli_query($conn,$qurw);
        }
        elseif ($msgr!=null) {
             $updatemsgquery2="UPDATE confirmation_message SET message='$msg2' WHERE username='$usrname'";
             mysqli_query($conn,$updatemsgquery2);
        }
        
        // delete from request table
        $query="DELETE FROM request_table WHERE user_name='$usrname'";
        $result=mysqli_query($conn,$query);
        echo "<script>
                     alert('Request Rejected');
                     location='admin.php'; 
              </script>
                ";
    }


?>
