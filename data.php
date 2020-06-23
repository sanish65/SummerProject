<?php

	
            $con=mysqli_connect("localhost","root","","VEHICLE_REG");
            if(!$con)
                {
                die("not connected.".mysqli_connect_error());
                }
            echo"<center>";
            echo"The following table has been booked:";
            $sql="SELECT * FROM register1";
            $result=mysqli_query($con,$sql) or die(mysqli_error($con));
                if(mysqli_num_rows($result)>0)
                    {
                    echo"<table border=1 color='black'>";
                    echo"<tr><th colspan=20>date</th><th colspan=10>Start Time</th><th colspan=10>End Time</h></tr>";
                while($row=mysqli_fetch_assoc($result))
                    {
                    echo"<tr><td colspan=20>".$row['reg_date']."</td><td colspan=10>".$row['time1']."</td><td colspan=10>".$row['time2']."</td></tr>";
                    
                    }	echo"</table>";
                }
            else{
                echo"unsuccessfull to create";
                }
            
            echo"</center>";
            ?>