<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <script>
    var myCenter=new google.maps.LatLng(23.7714,90.423);

    function initialize(){
      var mapProp = {
        center:myCenter,
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMA
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
  <style>
  .main{
   background-color:#EAE6E7;
   font: 400 15px/1.8 Lato, sans-serif;
   }
   .margin {margin-bottom: 25px;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .dmstyle{
    padding-top: 50px;
    padding-left: 5%;
  }
  body{
    background-color: F8F8F8;
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
  .jumbotron{
   background-color:grey;
   color:white;
   font-size:10px;
  }
    .bg-1 {k
      background-color: #1abc9c; /* Green */
      color: #ffffff;
}
#foot{
 color:white;
   font-size:5px;
}
  </style>
  </head> 

<body class="main">
 <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-brand">
      <li class="dropdown" style="position:static"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-align-justify"></span></a>
        <ul class="dropdown-menu" style="width:25%; height:800px; background-color:white;">
          <li><h4 class="dmstyle"><a style="text-decoration:none;" href="#trmsandcndition"> Terms & Conditions</a></h4></li>
          <!-- <li><h4 class="dmstyle" style="text-decoration:none;"><a href="#"> Privacy</a></h4></li> -->
		      <li><h4 class="dmstyle" style="text-decoration:none;"><a style="text-decoration:none;"  href="#Purposes"> Purposes </a></h4></li>
          <li><h4 class="dmstyle" style="text-decoration:none;"><a style="text-decoration:none;"  href="#donate"> Blood Donation </a></h4></li>
          <li><h4 class="dmstyle" style="text-decoration:none;"><a style="text-decoration:none;"  href="#foot"> Contact Us </a></h4></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-center">
      <li>
        <marquee width="1100px" behavior="alternate">
          <img src="images/blood.png" style="height:50px;">
        </marquee>
      </li>
    </ul>


    
    <ul class="nav navbar-nav navbar-right">
      <li>
       <a style="text-decoration:none;" href="#" role="button" id="myBtn1"><span class="glyphicon glyphicon-user"></span>Login</a>

        <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="a"><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form" action="connect_login.php" method="POST">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" id="usrname" class="form-control" name="uname" placeholder="User Name" required="">
              </div>
              <div class="form-group">
                <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span>Password</label>          
                <input type="password" id="pwd" class="form-control" name="pwd" placeholder="Password" required>
              </div>
              <!-- <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div> -->
              <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="registration_form.php">Sign Up</a></p>
          </div>
        </div>
        </div>
        </div>
        <script>
          $(document).ready(function(){
            $("#myBtn1").click(function(){
              $("#myModal1").modal();
            });
          });
        </script>
      </li>
	  </ul>





    <ul class="nav navbar-nav navbar-right">
	  <li>
	   <a style="text-decoration:none;" href="#" role="button" id="myBtn2"><span class="glyphicon glyphicon-text-background"></span>dmin</a>
	   <div class="modal fade" id="myModal2" role="dialog">
	   <div class="modal-dialog">
	   
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="a"><span class="glyphicon glyphicon-lock"></span>Admin Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form role="form" action="admin_login_connection.php" method="POST">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                <input type="text" id="usrname" class="form-control" name="uname" placeholder="User Name" required="">
              </div>
              <div class="form-group">
                <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span>Password</label>          
                <input type="password" id="pwd" class="form-control" name="pwd" placeholder="Password" required>
              </div>
              <!-- <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div> -->
              <button type="submit" class="btn btn-success btn-block" name="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </div>
        </div>
        </div>
		</div>
		<script>
          $(document).ready(function(){
            $("#myBtn2").click(function(){
              $("#myModal2").modal();
            });
          });
        </script>
	  </li>
	</ul>
  </div>
</nav>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
 </ol>
  <div class="container-fluid">
     
    <marquee style="color:red;" id="demo"> 
    <script>
      var d = new Date();
      document.getElementById("demo").innerHTML = d.toDateString();
    </script>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   Welcome to Blood Bank System &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp *Donate Blood, Save the Life*    
    </marquee>
  </div>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" >            

        <div class="item active">
             <div align="center">
               <video autoplay loop>
                 <source src="videos/469853579.mp4" width="100%" height="100%" type="video/mp4">
                 Your browser does not support the video tag.
              </video>
             </div>
		  </div>
             <div class="carousel-caption">
              <h3 color="black">Donate Blood</h3>
            </div>
			
			
			
			
	<div class="item">
             <div align="center">
               <video autoplay loop>
                 <source src="videos/Blood Donation Equipment Stock Footage Video 5292959 - Shutterstock.mp4" width="100%" height="100%" type="video/mp4">
                 Your browser does not support the video tag.
              </video>
             </div>
             <div class="carousel-caption">
              <h3 color="black">Donate Blood</h3>
            </div>
	</div>
	


    <div class="item">
             <div align="center">
               <video autoplay loop>
                 <source src="videos/469853579.mp4" width="100%" height="100%" type="video/mp4">
                 Your browser does not support the video tag.
              </video>
             </div>
		  </div>
             <div class="carousel-caption">
              <h3 color="black">Donate Blood</h3>
            </div>	
		
		
		
		  <div class="item">
             <div align="center">
               <video autoplay loop>
                 <source src="videos/134586954.mp4" width="100%" height="100%" type="video/mp4">
                 Your browser does not support the video tag.
              </video>
             </div>
		  </div>
             <div class="carousel-caption">
              <h3 color="black">Donate Blood</h3>
            </div>
		
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
</div>
<br/>

<div class="container-fluid bg-1 text-center" id="Purposes">
  <br/>
  <h3 class="margin">Purposes</h3>
  <br/>
  <img src="images/donate-blood.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <br/>
  <h3>To give service to all needed people and promoting to donate blood </h3>
  <br/>
</div>


<div class="container-fluid bg-3 text-center">
  <h3 class="margin">Way of donating blood</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Firstly, a person have to log in the blood bank system. And take the information to the center where one can donate blood.</p>
      <img src="images/85074738.jpg" class="img-responsive margin" style="width:95%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Secondly, we make sure your blood is ok and you are capable of giving blood.</p>
      <img src="images/1855888.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Finally,we can store your blood and we can serve your blood to needed people.</p>
      <img src="images/200158779-001.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>


<div class="jumbotron" style="background-color:#474E5D;" id="trmsandcndition">
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Terms and Conditions</h3>
  <p style="font-size:15px;">This website is built for helping thousand of people who needed blood to save their closest one.Our service is 24x7 on and we 
  always try to give our service timely.Because one bag of blood can change people's life.Members can also donate through our system.Thank you for reading.</p>
   <br/>
  <a href="help" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3">
    <span class="glyphicon glyphicon-search"></span> Help
  </a>
  
 <div id="help">
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <p>At First,you have to click the login button.</p><br/>
		  <p>Then,you have to login if not then register into the system.</p><br/>
		  <p>Then,you can find your profile,you can request for blood,you can donate the blood.</p><br/>
		  <p>It is very user friendly page.You can easily learn how to use and you can feed back us if you have any sort of problem.
		  Our helpline is +8801850969739.</p><br/>
		  <p>
		  <p>Thank you</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
</div>
</div>
</div>
<br/>
<br/>

<div class="container-fluid" id="donate">
<img src="images/donate-blood1.png" width="100%" height="100%">
</div>
<br>

<div class="jumbotron" id="foot">
<footer class="container-fluid bg-4 text-right">
<div id="contact" class="container">
  <h3 class="text-left">Contact:</h3>
  <p class="text-left"><em>We work for helping people</em></p>

  <div class="row">
    <div class="col-md-4">
      <p class="text-left"><span class="glyphicon glyphicon-map-marker"></span>Badda, Dhaka</p>
      <p class="text-left"><span class="glyphicon glyphicon-phone"></span>Phone: +8801850969739</p>
      <p class="text-left"><span class="glyphicon glyphicon-envelope"></span>Email: bloodbank@gmail.com</p>
      
    </div>
	<div class="container-fluid text-right">
    <div class="col-md-8">
     <p style="font-size:15px;"> &copy<strong> Blood Bank System</strong></p>
    </div>
  </div>
  </div>
</footer>
</div>
</body>
</html>