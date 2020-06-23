<?php
$username=$_POST["name1"];
$password=$_POST["pass1"];


if(empty($_POST["name1"]))
    {
        echo "<script type='text/Javascript'>
        alert('Please enter username!! ');
         </script>";
         include('login.php');
        
    }
if(empty($_POST["pass1"]))
    {
        echo "<script type='text/Javascript'>
        alert('Please enter password!! ');
         </script>";
         include('login.php');
        
    }


if($username== "admin")
    {
    
        if($password=="pass")
         {
        header("location:adminindex.html");
        }
    }
        
 
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
			if(!$con)
				{
				die("not connected.".mysqli_connect_error());
				}
				echo"<center>";
      
      
                $sql="SELECT * FROM registry WHERE name1='$username' ";
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0)
                {
                        $sql1="SELECT * FROM registry WHERE password1='$password'";
                        $result=mysqli_query($con,$sql1);
                        if(mysqli_num_rows($result)>0)
                        {
            
                        header("location:login2.php");
                        }
                        else
                        {
                        echo "<script type='text/Javascript'>
                        alert('Password is Wrong!! ');
                         </script>";
                         include('login.php');
                        
                        }
                }
                else
                        {
                        echo "<script type='text/Javascript'>
                        alert('Username is Wrong!! ');
                         </script>";
                         include('login.php');
            
                         
                        }
                ?>












login2 extra filesize

<?php

session_start();
if(isset($_SESSION['uname']))
    {
        $a=$_SESSION['uname'];
        echo "<script type='text/Javascript'>
                        alert('hello'.$a);
                         </script>";
    
        header("location:index.html");


    }
else{
    $username=$_POST['name1'];
    $password=$_POST['pass1'];

    $con=mysqli_connect("localhost","root","","VEHICLE_REG");
    if(!$con)
        {
        die("not connected.".mysqli_connect_error());
        }

    $sql="select name1, password1 from registry where name1='$username' and password1='$password'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0)
        {
            // echo"login successful."."hello".$_SESSION['uname'];
            $_SESSION['uname']=$username;
            header("location:login2.php");


        }

        else
        {
            echo"<script>alert('username or password is incorrect')</script>";
            echo"<script>location.href='login.php'</script>";
        }
}

?>