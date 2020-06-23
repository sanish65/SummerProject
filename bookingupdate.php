<?php
$dd1=$_POST["date1"];
$n1=$_POST["time1"];
$n2=$_POST["time2"];
$b=$_POST["silent_row_id"]; 



//print $date."<br>".$time1."<br>";
$date=strtotime($dd1);
$time1=strtotime($n1);
$t=date("H:i:s",$time1);
//echo("taken time is:".$t."<br>");
$d=date("Y-m-d",$date);
//echo("taken date is:".$d."<br>");




$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}

	$flag=0;
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
									break;
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
								include("book1.php");


								



								
			
								//header("location:book1.php");
	
						}
						elseif($flag == 0)
						{
							$sql="UPDATE register1 SET reg_date='$dd1', time1='$n1' , time2='$n2' where r_id='$b' ";
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
							// echo"updated Successfully";
								include("book1.php");
								}

							else{
								echo"error in booking".mysqli_error($con);
								}
						
						 }	
					
			
	
				}
	



?>