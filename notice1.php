<?php
$a=$_POST["about"];
$n=$_POST["notice"];



$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="INSERT INTO notice1 (about,notice1) VALUES ('$a','$n')";
if(mysqli_query($con,$sql))
	{	

	echo "<html>
			<head>
			<script type='text/javascript'>
		
			function show_alert()
			{
				alert('thanks for your suggettion.');
			}	
			</script>
			</head>";
	echo"<body onload='show_alert()'>
		
		</body></html>";
				include("notice.php");
	}
else
    {
	echo"error".mysqli_error();
	}
	
	?>