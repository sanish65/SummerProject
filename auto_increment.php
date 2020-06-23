<?php


$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}

$sql="ALTER TABLE register1  del reg_date ";
if(mysqli_query($con,$sql))
	{	
        echo"success";

	}

else{
	echo"error".mysqli_error($con);
	}

?>