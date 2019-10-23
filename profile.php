<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"test");
session_start();
if(!isset($_SESSION['User_Name'])){
  session_unset();
  session_destroy();
  header("Location:home_page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
 var myCenter=new google.maps.LatLng(23.7714,90.423);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Hi we are here!!!!"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
 </head>
 <style>
 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #1C3850;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .al{
	  border:1px solid black;
	  text:center;
	  background-color:#485E73;
	  padding:5px;
	  text-align:center;
	  color:white;
  }
  #ala{
	  width:550px;
	  border:2px;
	  padding:25px;
	  margin:30px; 
  }
  #ala2{
	  width:550px;
	  border:2px;
	  padding:25px;
	  margin:30px; 
  }
  .jumbotron {
      margin-bottom: 0;
    }
	.modal-header, .a, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-body{
  color:black;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
 </style>
 
 <body>
  <?php
        echo "<div class='jumbotron'>
        <div class='container text-center'>
             <h1>Hello! ".$_SESSION['User_Name']."</h1><p>Member of Blood Bank System</p></div></div>";
  ?>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home_page.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Sign out</a></li>
		<li><a href="#contact">About us</a></li>
      </ul>
    </div>
  </div>
</nav>
 <h3 class="al">Profile</h3>
 <div class="row content">
 <div class="col-sm-4" id="ala">
    <?php echo "<img src='uploads/".$_SESSION['User_Name'].".jpg' width='320px' height='320px'>
    "; ?>
	<br/>
 </div>
 <div class="col-sm-8" id="ala2">
<div class="cotainer text-center">
 <?php echo"<h3>".$_SESSION['User_Name']."</h3>"; ?>
  <p><em>Welcome to Blood Bank System</em></p>
  <p>You are a member of this system.
  Whenever you need any service or give any service you
  should login and do stuff as regarding.You can here requst for blood and can donate blood.</p>
</div>
</div>
</div>
<div class="jumbotron">
<div class="container">
<div class="row">
<div class="col-sm-4">
<p>Here you can check your confirmation about your requested blood.</p><br>
<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" name="inbox">Inbox</button></a>
</div>
<div class="col-sm-4">
<p>Here you can request for blood which is needed.</p><br>
<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Request</a>
</div>
<div class="col-sm-4">
<p>Here you can learn the information to donate blood.</p><br>
<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Donate</a>
</div>
</div>
</div>
</div>

   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
		    <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Inbox</h4></div>              				
				<div class="modal-body">
        
		<?php
	    $conn=mysqli_connect("localhost","root","");
		  mysqli_select_db($conn,"test");
		  $name = $_SESSION["User_Name"];
		  $q="SELECT message from confirmation_message where username='$name'";
		  $res = mysqli_query($conn,$q);
		  $row = mysqli_fetch_array($res);
		  $msg = $row['message'];
		  echo "<br/><br/><p>".$msg."</p><br/>";
		  if($msg==null){
			 echo "<br/><br/><p>You dont have any message</p><br/>";
		  } 
		  // mysqli_close($conn);	
		?>
                     <p>Thank you</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
          </div>
	  
      </div>     
    </div>
  </div> 
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Request for blood</h4>
        </div>
      <div class="modal-body">
          
		  <form class="form-horizontal" role="form" action="" method="POST">
          <div class="form-group">
            <label for="bldgrp" class="col-sm-3 control-label">Blood Group</label>
              <div class="col-sm-9">
                        <select id="bloodgrp" class="form-control" name="bloodgrp">
                            <option>A(+ve)</option>
                            <option>B(+ve)</option>
                            <option>AB(+ve)</option>
                            <option>AB(-ve)</option>
                            <option>O(+ve)</option>
                            <option>O(-ve)</option>
                        </select>
              </div>
          </div>
          <div class="form-group">
               <label for="text" class="col-sm-3 control-label">Bag needed:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="bagneed" placeholder="Enter number of bags" required>
                </div>
          </div>
<!--           <div class="form-group">
               <label for="emailaddr" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                    <input type="email" id="emailaddr" class="form-control" name="email" placeholder="Example: sany584@gmail.com" required>
                </div>
          </div -->
          
          <div class="form-group">
               <label for="date" class="col-sm-3 control-label">When Need:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="blood_needed_time" required="">
                </div>
          </div>
          <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" class="btn btn-success btn-sm" value="Request" name="request">
                </div>
          </div>
      </form>
      </div>

      <!-- Blood request -->
      <?php
        if (isset($_POST["request"])) {
          $bloodgroup=$_POST["bloodgrp"];
          $bloodbag=$_POST["bagneed"];
          $bloodtime=$_POST["blood_needed_time"];
          $username=$_SESSION['User_Name'];

          $connection=mysqli_connect("localhost","root","");
          if($connection==false) 
              die("could not connect");
          else
              //echo "Connection Successful";
        
          mysqli_select_db($connection,"test");
          $query= "INSERT INTO request_table values ('$bloodgroup','$bloodbag','$bloodtime','$username')";
          $result=mysqli_query($connection,$query);
          echo "
              <script>
                     alert('Your request Successfully received'); 
              </script>
                ";
        }  
         // mysqli_close($connection);	 	
      ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Donate blood</h4>
        </div>
        <div class="modal-body">
          <p>If you are prepeared for donate blood you can contact us our help line is +8801850969739 </p><br/>
		  <p>
		  <p>Thank you</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <br>
<!--   <div class="container-fluid">
  <div id="googleMap" style="width:100%;height:680px;"></div>
  </div> -->
  <br>

  <div id="contact" class="container-fluid" style="background-color:#474E5D;color:white">
  <h3 class="text-left">Contact</h3>
  <p class="text-left"><em>We work for helping people</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Badda, Dhaka</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +8801850969739</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: bloodbank@gmail.com</p>
    </div>
	<div class="container-fluid text-right">
    <div class="col-md-8">
     <p style="font-size:15px;"> &copy<strong> Blood Bank System</strong></p>
    </div>
  </div>
  </div>
  </div>
 </body>

