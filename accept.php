<?php
//message
    $msg1 = "Your request has been accepted.And please collect the bags from ours head office in Badda.";
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
        $qmsg1="SELECT message from confirmation_message where username='$usrname'";
        $resmsg1 = mysqli_query($conn,$qmsg1);
        $rowmsg1 = mysqli_fetch_array($resmsg1);
        $msga = $rowmsg1['message'];
        //inseting into message table
        if($msga==null){
            $qu = "INSERT into confirmation_message values('$usrname','$msg1')";
            mysqli_query($conn,$qu);
        }
        elseif ($msga!=null) {
             $updatemsgquery1="UPDATE confirmation_message SET message='$msg1' WHERE username='$usrname'";
             mysqli_query($conn,$updatemsgquery1);
        }
		

        // Start retrieving how many blood bag need from request table using username
        $q1="SELECT Bag_Need FROM request_table WHERE user_name='$usrname'";
        $r1=mysqli_query($conn,$q1);
        $row1= mysqli_fetch_array($r1);
        $needbldbag = $row1['Bag_Need'];
        // end retrieving how many blood bag need from request table using username

        // Start retrieving  which blood group need from request table using username
        $q2="SELECT Blood_Group FROM request_table WHERE user_name='$usrname'";
        $r2=mysqli_query($conn,$q2);
        $row2 = mysqli_fetch_array($r2);
        $needbldgrp = $row2['Blood_Group'];
        // end of retrieving which blood group need from request table using username

        // start retrieving available bag in blood information table
        $q3="SELECT Bag_Available FROM blood_information WHERE Blood_Group='$needbldgrp'";
        $r3=mysqli_query($conn,$q3);
        $row3=mysqli_fetch_array($r3);
        $bagavailable= $row3['Bag_Available'];
        // end retrieving available bag in blood information table

        $sub=$bagavailable-$needbldbag;
        if($sub>=0){
            $updatequery="UPDATE blood_information SET Bag_Available='$sub' WHERE Blood_Group='$needbldgrp'";
            $updateresult=mysqli_query($conn,$updatequery);

            $query="DELETE FROM request_table WHERE user_name='$usrname'";
            $result=mysqli_query($conn,$query);
            echo "<script>
                     alert('Request Successfully Accepted'); 
                     location='admin.php'; 
                  </script>
                ";
        }
        else{
            echo "<script>
                     alert('Not enough blood in storage'); 
                     location='admin.php'; 
                  </script>
                ";
        }    
    }

?>