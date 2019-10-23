<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- common in all page -->
    <style type="text/css">

        body { 
            background: url("images/130888454.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /*background-color: #EDD7BF;*/
        }
        table {
            border-collapse: collapse;
        }

        table, td, th, tr {
            border: 0px solid black;
            text-align: center;
        }

        .panel-success {
            opacity: 0.9;
            margin-top:30px;
        }
        .form-group.last {
            margin-bottom:0px;
        }
        .panel-heading{
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color:black" href="home_page.php">Home</a>
            </div>
            <ul class="nav navbar-nav navbar-right" >
                <li>
                    <a href="home_page.php"><img src="images/blood.png" style="width:80%; height:40px;"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" >
        <marquee style="color:red;"> 
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   Welcome to Blood Bank System &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp *Donate Blood, Save the Life*    
        </marquee>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-7"></div>
        <div class="col-md-5">
            <h1 class="header">Registration Form</h1><br>
            <div class="panel panel-success">
                <div class="panel-heading">Create Your Account  !</div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration_form.php" accept-charset="UTF-8" enctype="multipart/form-data">
                    
                        <label for="fname">Full Name</label>
                        <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter your name" required>
                        
                        <label for="bldgrp">Blood Group</label>
                        <select id="bloodgrp" class="form-control" name="bloodgrp">
                            <option>A(+ve)</option>
                            <option>B(+ve)</option>
                            <option>AB(+ve)</option>
                            <option>AB(-ve)</option>
                            <option>O(+ve)</option>
                            <option>O(-ve)</option>
                        </select>
                        <label for="districts" class="m-t-10">Select your District</label>
                        <select id="districts" class="form-control" name="district">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Bagherhat">Bagherhat</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Barguna">Barguna</option>
                            <option value="Bogra">Bogra</option>
                            <option value="Bhola">Bhola</option>
                            <option value="Bandorban">Bandorban</option>
                            <option value="Brahmonbaria">Brahmonbaria</option>
                            <option value="Chadpur">Chadpur</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Chuadanga">Chuadanga</option>
                            <option value="Chapainawabganj">Chapainawabganj</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Cox's Bazar">Cox's Bazar</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Feni">Feni</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Gaibandha">Gaibandha</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Habiganj">Habiganj</option>
                            <option value="Jhalokati">Jhalokati</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Jaypurhat">Jaypurhat</option>
                            <option value="Jessore">Jessore</option>
                            <option value="Jhenaidah">Jhenaidah</option>
                            <option value="Khagrachori">Khagrachori</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Kurigram">Kurigram</option>
                            <option value="Khustia">Khustia</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Laksmipur">Laksmipur</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Magura">Magura</option>
                            <option value="Madaripur">Madaripur</option>
                            <option value="Meherpur">Meherpur</option>
                            <option value="Manikganj">Manikganj</option>
                            <option value="Moulovibazar">Moulovibazar</option>
                            <option value="Munshigonj">Munshigonj</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Narayanganj">Narayanganj</option>
                            <option value="Narshingdi">Narshingdi</option>
                            <option value="Narail">Narail</option>
                            <option value="Naogaon">Naogaon</option>
                            <option value="Natore">Natore</option>
                            <option value="Netrokona">Netrokona</option>
                            <option value="Nilphamari">Nilphamari</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Pabna">Pabna</option>
                            <option value="Panchogarh">Panchogarh</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rajbari">Rajbari</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Shariatpur">Shariatpur</option>
                            <option value="Shatkhira">Shatkhira</option>
                            <option value="Sherpur">Sherpur</option>
                            <option value="Shirajganj">Shirajganj</option>
                            <option value="Sunamganj">Sunamganj</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Tangail">Tangail</option>
                            <option value="Thakurgaon">Thakurgaon</option>
                        </select>
                        
                        <label for="gender" class="m-t-10">Your Gender</label>
                        <select id="gender" class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <label for="mobileno" class="m-t-10">Mobile No.</label>
                        <input type="text" id="mobileno" class="form-control" name="mobile" placeholder="Ex: 01xxxxxxxxx" required="this must be fill up">
                        
                        <label for="emailaddr" class="m-t-10">Email Address</label>
                        <input type="email" id="emailaddr" class="form-control" name="email" placeholder="Ex: example@gmail.com" required>

                        <label for="uname">User Name</label>
                        <input type="text" id="uname" class="form-control" name="uname" placeholder="Enter Username">
                        
                        <label  for="pwd1" class="m-t-10">Password</label>
                        <input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" class="form-control" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');if(this.checkValidity()) form.pwd2.pattern = this.value;" placeholder="Enter Password" required>

                        <label for="pwd2" class="m-t-10">Confirm Password</label>
                        <input title="Please enter the same Password as above" class="form-control" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title :'');" placeholder="Re-enter Password">
                
                        <label for="inputfile" class="m-t-10">Image:</label>
                        <input type="file" name="uploadimage" id="uploadimage" required> <br>                      
                        <input type="submit" class="btn btn-success m-t-10 form-control" id="submitbtn" name="submit" value="Create Account">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php

    if(isset($_POST["submit"])){
        $fname=$_POST["fname"];
        $gender=$_POST["gender"];
        $bloodgroup=$_POST["bloodgrp"];
        $district=$_POST["district"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $username=$_POST["uname"];
        $password=$_POST["pwd1"];
        $seed=substr($username,0,2);
        $enc_password=crypt($password,$seed);

        // image
        $filename = $_FILES["uploadimage"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
        $file_ext = substr($filename, strripos($filename, '.')); // get file name
        $filesize = $_FILES["uploadimage"]["size"];
        $allowed_file_types = array('.JPG','.JPEG','.PNG','.GIF','.jpg','.jpeg','.png','.gif');


        if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000)){   
            // Rename file
            $newfilename = ($username) . $file_ext;
            if (file_exists("uploads/" . $newfilename)){
            // file already exists error
                echo "<script>alert('You have already uploaded this Image.')</script>";
            }
            else{       
                //move_uploaded_file($_FILES["uploadimage"]["tmp_name"], "uploads/" . $newfilename);
                move_uploaded_file($_FILES["uploadimage"]["tmp_name"], "uploads/".$username.$file_ext);
                //echo "<script>alert('Image uploaded successfully.')</script>";     
            }
        }
        elseif (empty($file_basename)){   
        // file selection error
            echo "<script>alert('Please select a Image to upload.')</script>";
        } 
        elseif ($filesize > 200000){   
        // file size error
            echo "<script>
                alert('The Image you are trying to upload is too large.')
            </script>";
        }
        else{
        // file type error
            echo "<script>alert('Only these Image types are allowed for upload: ')</script>" . implode(', ',$allowed_file_types);
            unlink($_FILES["uploadimage"]["tmp_name"]);
        }

        // image

        $connection=mysqli_connect("localhost","root","");
        if($connection==false) 
            die("could not connect");
        else
            //echo "Connection Successful";
        
        mysqli_select_db($connection,"test");

            // username existence check
        $q ="SELECT User_Name FROM registration_form WHERE User_Name='$username'";
        $res=mysqli_query($connection,$q);

        if (mysqli_num_rows($res)!=0){
                echo "<script>
                    alert('Sorry, that Username is already taken. Please choose another.')
                  </script>";
        }
        else{
            $query= "INSERT INTO registration_form values ('$fname','$gender','$bloodgroup','$district','$email','$mobile','$username','$enc_password')";
            $result=mysqli_query($connection,$query);
            echo "
                <script>
                    alert('You are Successfully Registered')
                </script>";
        }
    }
?>