<?php
session_start();
$name1=$_POST["name1"];
$email1=$_POST["email1"];
$email2=$_POST["email2"];
$pass1=$_POST["pass1"];

// $email=$_SESSION['email2'];

// $_SESSION["Session_Email1"]=$email1;

$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}

// $sql1="SELECT * FROM adminregistry where name1='$name1' AND email1='$email1' AND pass1='$pass1' ";
// $result=mysqli_query($con,$sql1) or die(mysqli_error($con));
			
// 				if(mysqli_num_rows($result)>0)
// 				{
// 					header("location:admin.html");
// 				}
// else{
	


$sql="INSERT INTO registry (name1,email1,email2,password1) VALUES ('$name1','$email1','$email2','$pass1')";
	if(mysqli_query($con,$sql))
			{	

			echo "<html>
			<head>
			<script type='text/javascript'>
				
					function show_alert()
					{
						alert('Register Success!!!');
					}	
					</script>
					</head>";
			echo"<body onload='show_alert()'>
				
				</body></html>";
			// echo"booked Successfully";
				include("landing.html");
				}

		
		else{
			echo "<html>
			<head>
			<script type='text/javascript'>
				
					function show_alert()
					{
						alert('Register unsuccessful !!!');
					}	
					</script>
					</head>";
			echo"<body onload='show_alert()'>
				
				</body></html>";
			echo"booked Successfully";
				include("register.html");

		}


?>



