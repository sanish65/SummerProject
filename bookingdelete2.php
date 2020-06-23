<?php


// session_start();
// if(!$_SESSION['SESSION1'])
// {
// 	header("Location:index.html"):
// 	exit();

// }

 $a=$_POST["a"];



$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}

$sql="DELETE FROM register2 WHERE r_id= '$a' ";
if(mysqli_query($con,$sql))
	{	
        echo "<html>
			<head>
			<script type='text/javascript'>
		
			function show_alert()
			{
				alert('Booking Deleted!!!');
			}	
			</script>
			</head>";
	echo"<body onload='show_alert()'>
		
		</body></html>";
echo"booked Successfully";
	header("Location:book2.php");
	}

else{
	echo"error in booking".mysqli_error($con);
	}

?>