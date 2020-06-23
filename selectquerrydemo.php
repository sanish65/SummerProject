<?php
$date=$_POST["date1"];
$time1=$_POST["time1"];
$time2=$_POST["time2"];


print $date."<br>".$time1."<br>";
$date=strtotime($date);
$time1=strtotime($time1);
$t=date("H:i:s",$time1);
echo("taken time is:".$t."<br>");
$d=date("Y-m-d",$date);
echo("taken date is:".$d."<br>");


$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}

$sql="ALTER TABLE register1 drop r_id";
if(mysqli_query($con,$sql))
{
	$sql1="ALTER TABLE register1 add r_id INT NOT NULL AUTO_INCREMENT primary key ";
	if(mysqli_query($con,$sql1))
	{
	}

else{
	echo"error".mysqli_error($con);
	}
}



$flag;
$i=0;
$sql="SELECT reg_date , time1 , time2  FROM register1";
			$result=mysqli_query($con,$sql) or die(mysqli_error($con));
			
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result)) 
					{
						//print_r($row["reg_date"]."<br>");
						//print_r($row["time1"]."<br>");
	

                     if(($row["reg_date"] == $d))
                        {
							// print_r($t);
							//print_r($row["time1"]);
							if(($row["time1"] == $t)){
								$flag=1;
								// print_r("Flag = 1");
							}
							else
							{
							 $flag=0;	
							//  print_r("Flag 0"); 
							}
						}
					 else 
					 	{
							// print_r("Date not same");
						}

			
				}
				
					
				if($flag == 1)
					{
						echo "<script type='text/Javascript'>
                            alert('table already booked for this date nad time!!!!');
                            </script>";
        
                            header("location:book1.php");

					}
					elseif($flag == 0)
					{
						$sql="INSERT INTO register1 (reg_date,time1,time2) VALUES ('$d','$t','$time2')";
						if(mysqli_query($con,$sql))
							{	
								echo "<html>
									<head>
									<script type='text/javascript'>
								
									function show_alert()
									{
										alert('Table booked!!!');
									}	
									</script>
									</head>";
							echo"<body onload='show_alert()'>
								
								</body></html>";
						echo"booked Successfully";
							header("Location:book1.php");
							}
			
						else{
							echo"error in booking".mysqli_error($con);
							}
					// 	echo "<script type='text/Javascript'>
                    //         alert('booked successfully!! ');
					// 		 </script>";
					// 		 header("location:book1.php");
					 }	
				
		

			}


// $sql1="SELECT * FROM reigister1";
// $result=mysqli_query($con,$sql1);
// 	if(mysqli_num_rows($result)>0)
// 	{
// 		while($row=mysqli_fetch_assoc($result))
// 		{
// 			if(strcmp('$date',$row["reg_date"])==0 && strcmp('$time1',$row["time1"])==0 && strcmp('$time2',$row["time2"])==0 )
// 			{

// 				echo "<script type='text/Javascript'>
// 					alert('table is already booked for this time!');
// 				</script>";

// 				header("location:index.html");

				
// 			}

// 			else
// 			{
		

	// 		}
	// 	}
	// }
	

// 	else{
// 	echo"error in comparing";
// 		}

?>