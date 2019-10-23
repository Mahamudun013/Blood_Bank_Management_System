<?php

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"test");
session_start();
if(!isset($_SESSION['username'])){
  session_unset();
  session_destroy();
  header("Location:home_page.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- common in all page -->
    <style type="text/css">

        body { 
            background: url("") no-repeat center center fixed; 
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
            <ul class="nav navbar-nav navbar-center">
                <li>
                    <marquee width="500%" behavior="alternate">
                        <img src="images/blood.png" style="height:50px;">
                </marquee>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" >
                <li>
                    <a href="logout.php">Signout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" >
        <marquee style="color:white;"> 
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   Welcome to Online Blood Banking System &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp Donate Blood Save Life    
        </marquee>
    </div>
<div class="container">
  <h2 style="color:#08315C">Request Table</h2>
  <br>
  <?php
    
    $conn=mysqli_connect("localhost","root","");
    if($conn==false) 
        die("could not connect");
    else
        // echo "Connection Successful";
    mysqli_select_db($conn,"test");
    $query= "SELECT * FROM request_table" ;
    $result= mysqli_query($conn,$query);
  ?>
  <div class="table-responsive" style="text-align: center;">
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr class="success">
        <th>Serial No.</th>
        <th>User Name</th>
        <th>Blood Group</th>
        <th>Bag Need</th>
        <th>Date</th>
        <!-- <th>Requested by</th> -->
        <th>Confirm</th>
        <th>Reject</th>
      </tr>
    </thead>
    <tbody>
          
        <?php
            $i=0;
            while ( $array=mysqli_fetch_assoc($result)) {
                $i=$i+1;
              
                
        ?>    
            <tr class="danger">
                <td> <?php echo $i ?></td>
                <td><?php echo $array['user_name']?></td>
                <td><?php echo $array['Blood_Group'] ?></td>
                <td><?php echo $array['Bag_Need'] ?></td>
                <td><?php echo $array['Date'] ?></td>
                <td><a href="accept.php?user=<?php echo $array['user_name'] ?>&bloodgrp=<?php echo $array['Blood_Group'] ?>&bag=<?php echo $array['Bag_Need'] ?>" class="btn btn-success no-rad">Accept</a></td>
                <td><a href="reject.php?user=<?php echo $array['user_name'] ?>" class="btn btn-danger no-rad">Reject</a></td>
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>  

 <?php    mysqli_close($conn); ?>
 <div class="container">
  <h2 style="color:#08315C">Admin Actions</h2>
  <br>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#search">Search</a></li>
    <li><a data-toggle="pill" href="#menu1">Add Blood Group</a></li>
    <li><a data-toggle="pill" href="#menu2">Update Blood Information</a></li>
    <li><a data-toggle="pill" href="#menu3">Show Blood Information</a></li>
    <li><a data-toggle="pill" href="#menu4">Show Member</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="search" class="tab-pane fade in active">
        <div class="container">
            <h3>Search For Available Blood</h3>
            <br>
            <form class="form-horizontal" role="form" action="" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="blood">Blood Group:</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="blood" name="bloodgrp">
                            <option>A(+ve)</option>
                            <option>B(+ve)</option>
                            <option>B(-ve)</option>
                            <option>AB(+ve)</option>
                            <option>AB(-ve)</option>
                            <option>O(+ve)</option>
                            <option>O(-ve)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info" name="submit">
                            <span class="glyphicon glyphicon-search"></span>Search
                        </button>
                    </div>
                </div>
            </form>
            
            <!-- Search -->
            <?php 
                if(isset($_POST["submit"])){
                    $bldgrp=$_POST["bloodgrp"];
                    if($bldgrp==null || $bldgrp==""){
                        echo "Enter a Blood Group above";
                    }
                    else{
                        echo "<h3>Search result of Blood Group $bldgrp</h3>";
                        echo "<br>";
                        $conn=mysqli_connect("localhost","root","");
                        if($conn==false)
                            die("could not connect");

                        mysqli_select_db($conn,"test");
                        $query= "SELECT * FROM blood_information WHERE Blood_Group='$bldgrp'" ;
                        $result= mysqli_query($conn,$query);
                       /* $row=mysqli_fetch_array($result);
                        $bloodgrp=$row['Blood_Group'];
                        $bldbag = $row['Bag_Available'];
                        // if($bloodgrp==null || $bldbag==null){
                        //     echo "There is no data to show. Add data First";
                        // }
                        // else{*/
                        echo"<div class='table-responsive' style='text-align: center'>";
                        echo"<table class='table table-striped table-bordered table-hover table-condensed'>";
                            echo "<thead>";
                                echo "<tr class='success'>";
                                echo"<th>Blood Group</th>";
                                echo"<th>Bag Avalable</th>";
                                echo"</tr>";
                            echo"</thead>";
                            echo"<tbody>";
                            while ( $array=mysqli_fetch_assoc($result)) {
                                echo "<tr class='danger'>";
                                    echo "<td>".$array['Blood_Group']."</td>";
                                    echo "<td>".$array['Bag_Available']."</td>";
                                echo "</tr>";
                
                            }
                            echo"</tbody>";
                        echo"</table>";
                        echo"</div>";
                        mysqli_close($conn);

                        // }
                    } 
                }
            ?>
        </div>
    </div>

    <div id="menu1" class="tab-pane fade">
        <div class="container">
            <h3>Add Blood information to database</h3>
            <br>
            <form class="form-horizontal" role="form" action="" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="blood">Blood Group:</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="blood" name="bloodgrp">
                            <option>A(+ve)</option>
                            <option>B(+ve)</option>
                            <option>B(-ve)</option>
                            <option>AB(+ve)</option>
                            <option>AB(-ve)</option>
                            <option>O(+ve)</option>
                            <option>O(-ve)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="col-sm-2 control-label">Blood Bag:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="bloodbag" placeholder="Enter number of bags" required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Collection Date:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="blood_collection_date" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Expire Date:</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="blood_expire_date" required="">
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-info" name="ADD" value="ADD">
                    </div>
                </div>
            </form>
        </div>
        <!-- adding blood info -->
        <?php
            if(isset($_POST["ADD"])){
                $bloodgroup=$_POST["bloodgrp"];
                $bloodbag=$_POST["bloodbag"];

                $connection=mysqli_connect("localhost","root","");
                if($connection==false) 
                    die("could not connect");
                else
                    //echo "Connection Successful";
        
                mysqli_select_db($connection,"test");
                $query= "INSERT INTO blood_information values ('$bloodgroup','$bloodbag')";
                $result=mysqli_query($connection,$query);
                //echo "Blood information Successfully added";
            }

        ?>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="container">
            <h3>Update Blood information to database</h3>
            <br>
            <form class="form-horizontal" role="form" action="" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="blood">Blood Group:</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="blood" name="bloodgrp">
                            <option>A(+ve)</option>
                            <option>B(+ve)</option>
                            <option>B(-ve)</option>
                            <option>AB(+ve)</option>
                            <option>AB(-ve)</option>
                            <option>O(+ve)</option>
                            <option>O(-ve)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="col-sm-2 control-label">Blood Bag:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="bloodbag" placeholder="Enter number of bags" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-info" name="Update" value="Update">
                    </div>
                </div>
            </form>
        </div>
        
        <!-- update -->
        <?php
            if(isset($_POST["Update"])){
                $bloodgroup=$_POST["bloodgrp"];
                $bloodbag=$_POST["bloodbag"];

                $connection=mysqli_connect("localhost","root","");
                if($connection==false) 
                    die("could not connect");
                else
                    //echo "Connection Successful";
        
                mysqli_select_db($connection,"test");
                $q= "SELECT Bag_Available FROM blood_information WHERE Blood_Group='$bloodgroup'";
                $result=mysqli_query($connection,$q);
                $row = mysqli_fetch_array($result);
                $bldbag = $row['Bag_Available'];
                $sum=$bldbag+$bloodbag;
                //echo "$sum";
                $query = "UPDATE blood_information SET Bag_Available='$sum' WHERE Blood_Group='$bloodgroup'";
                $result=mysqli_query($connection,$query);
                if(! $result ) {
                        die('Could not update data');
                }
                else {
                    echo "Updated data successfully";
                }
            
            }

        ?>
    </div>
    <div id="menu3" class="tab-pane fade">
    <div class="container">
        <h3>Blood Information Table</h3>
        <?php
            echo "<br>";
            $conn=mysqli_connect("localhost","root","");
            if($conn==false)
                die("could not connect");
            mysqli_select_db($conn,"test");
            $query= "SELECT * FROM blood_information" ;
            $result= mysqli_query($conn,$query);
            echo"<div class='table-responsive' style='text-align: center'>";
                echo"<table class='table table-striped table-bordered table-hover table-condensed'>";
                    echo "<thead>";
                        echo "<tr class='success'>";
                            echo"<th>Blood Group</th>";
                            echo"<th>Bag Avalable</th>";
                        echo"</tr>";
                    echo"</thead>";
                    echo"<tbody>";
                        while ( $array=mysqli_fetch_assoc($result)) {
                            echo "<tr class='danger'>";
                                echo "<td>".$array['Blood_Group']."</td>";
                                echo "<td>".$array['Bag_Available']."</td>";
                            echo "</tr>";
                        }
                    echo"</tbody>";
                echo"</table>";
            echo"</div>";
        ?>
    </div>
    </div>
    <div id="menu4" class="tab-pane fade">
        <div class="container">
            <h3>Members Table</h3><br>
            <?php
                $conn=mysqli_connect("localhost","root","");
                if($conn==false) 
                    die("could not connect");
                else
                    // echo "Connection Successful";
                mysqli_select_db($conn,"test");
                $query= "SELECT Full_Name,Blood_Group,Gender,District,Email,Mobile FROM registration_form" ;
                // $query="SELECT * FROM registration_form";
                $result= mysqli_query($conn,$query);
            ?>
            <table class="table table-bordered">
            <thead >
            <tr class="success">
                <th>Serial No.</th>
                <th>Full Name</th>
                <th>Blood Group</th>
                <th>Gender</th>
                <th>District</th>
                <th>Email</th>
                <th>Mobile No.</th>
            </tr>
            </thead>
            <tbody> 
            <?php
                $i=0;
                while ( $array=mysqli_fetch_assoc($result)) {
                    $i=$i+1;
                    echo "<tr class='danger'>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$array['Full_Name']."</td>";
                    echo "<td>".$array['Blood_Group']."</td>";
                    echo "<td>".$array['Gender']."</td>";
                    echo "<td>".$array['District']."</td>";
                    echo "<td>".$array['Email']."</td>";
                    echo "<td>".$array['Mobile']."</td>";
                    echo "</tr>";
                }
                
            ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
     <?php
	 mysqli_close($conn); ?>
</body>
</html>

