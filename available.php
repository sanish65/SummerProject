<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

 
<!-- Main layout -->

<!-- Main navigation -->
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>Capital Snooker</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="available.html">Available Plots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
        </ul>
        <form class="form-inline">
          <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('sss.jpg');  background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center">
            <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Play
              <a class="indigo-text font-weight-bold">Snooker</a>
            </h1>
            <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Now!!</h5>
            <div class="wow fadeInDown" data-wow-delay="0.3s">
              <a class="btn btn-light-blue btn-lg" href="register.html">Register Me</a>
              <a class="btn btn-indigo btn-lg" href="book1.php">Book Now</a>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->

<main>
  <div class="container">
    <!--Grid row-->
    <div class="row py-5">
      <!--Grid column-->
 


   
      <div class="col-md-12 text-center">

      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
</main>
<!--Main Layout-->





<table>
  <tr>
    <td>
<?php
 
			$con=mysqli_connect("localhost","root","","VEHICLE_REG");
			if(!$con)
				{
				die("not connected.".mysqli_connect_error());
				}
				echo"<center>";
      echo"Alpha table booking:";
      
      $sql="ALTER TABLE register1 drop r_id";
          if(mysqli_query($con,$sql))
	        $sql1="ALTER TABLE register1 add r_id INT NOT NULL AUTO_INCREMENT primary key ";
	          if(mysqli_query($con,$sql1))
	                {
	                }
			$sql="SELECT * FROM register1";
			$result=mysqli_query($con,$sql) or die(mysqli_error($con));
				if(mysqli_num_rows($result)>0)
					{
					echo"<table class='table' border=1>";
					echo"<tr><th scope='col' colspan=5>Book No.</th><th scope='col' colspan=20>Date</th><th scope='col' colspan=10>Start Time</th><th scope='col' colspan=10>End Time</th></tr>";
				while($row=mysqli_fetch_assoc($result))
					{
            $a=$row["r_id"];
            echo"<tr><td colspan=5>".$row['r_id']."
            </td><td colspan=20>
            ".$row['reg_date']."</td><td colspan=10>".$row['time1']."</td><td colspan=10>".$row['time2']."</td></tr>";
					
					}	echo"</table>";
				}
			else{
				echo"No Bookings Yet!";
				}
	
			 echo"</center>";
      ?>
      </td>
      <td>
        
<?php
 
 $con=mysqli_connect("localhost","root","","VEHICLE_REG");
 if(!$con)
   {
   die("not connected.".mysqli_connect_error());
   }
   echo"<center>";
 echo"Beta table booking:";
 
 $sql="ALTER TABLE register2 drop r_id";
     if(mysqli_query($con,$sql))
     $sql1="ALTER TABLE register2 add r_id INT NOT NULL AUTO_INCREMENT primary key ";
       if(mysqli_query($con,$sql1))
             {
             }
 $sql="SELECT * FROM register2";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
   if(mysqli_num_rows($result)>0)
     {
     echo"<table class='table' border=1>";
     echo"<tr><th scope='col' colspan=5>Book No.</th><th scope='col' colspan=20>Date</th><th scope='col' colspan=10>Start Time</th><th scope='col' colspan=10>End Time</th></tr>";
   while($row=mysqli_fetch_assoc($result))
     {
       $a=$row["r_id"];
       echo"<tr><td colspan=5>".$row['r_id']."
       </td><td colspan=20>
       ".$row['reg_date']."</td><td colspan=10>".$row['time1']."</td><td colspan=10>".$row['time2']."</td></tr>";
     
     }	echo"</table>";
   }
 else{
   echo"No Bookings Yet!";
   }

  echo"</center>";
 ?>
 </td>
 <td>
 <?php
 
 $con=mysqli_connect("localhost","root","","VEHICLE_REG");
 if(!$con)
   {
   die("not connected.".mysqli_connect_error());
   }
   echo"<center>";
 echo"Beta table booking:";
 
 $sql="ALTER TABLE register3 drop r_id";
     if(mysqli_query($con,$sql))
     $sql1="ALTER TABLE register3 add r_id INT NOT NULL AUTO_INCREMENT primary key ";
       if(mysqli_query($con,$sql1))
             {
             }
 $sql="SELECT * FROM register3";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
   if(mysqli_num_rows($result)>0)
     {
     echo"<table class='table' border=1>";
     echo"<tr><th scope='col' colspan=5>Book No.</th><th scope='col' colspan=20>Date</th><th scope='col' colspan=10>Start Time</th><th scope='col' colspan=10>End Time</th></tr>";
   while($row=mysqli_fetch_assoc($result))
     {
       $a=$row["r_id"];
       echo"<tr><td colspan=5>".$row['r_id']."
       </td><td colspan=20>
       ".$row['reg_date']."</td><td colspan=10>".$row['time1']."</td><td colspan=10>".$row['time2']."</td></tr>";
     
     }	echo"</table>";
   }
 else{
   echo"No Bookings Yet!";
   }

  echo"</center>";
 ?>
 </td>
  </tr>
  </table>

      
      
<!-- Main layout -->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Extra feature will be added soon!</h5>
        <p>Keep browsing for more onformation.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Find us on:</h5>

        <ul class="list-unstyled">
          <li>
            <a href="facebook.com"><i class="fab fa-facebook-f"></i>Facebook</a>
          </li>
          <li>
            <a href="twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
          </li>
          <li>
            <a href="instagram.com"><i class="fab fa-instagram"></i>Instagram</a>
          </li>
           </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Call us:</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!"><i class="fas fa-phone"></i>9889988990</a>
          </li>
          <li>
            <a href="#!"><i class="fas fa-phone"></i>9889988991</a>
          </li>
          <li>
            <a href="#!"><i class="fas fa-phone"></i>9889988992</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="capitalSnooker.com"> CapitalSnooker.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script type="text/javascript" src="carjs.js"></script>
</body>

</html>
