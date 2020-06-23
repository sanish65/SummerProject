<?php

session_start();
if(isset($_SESSION['uname']))
    {
        echo"login successful."."hello" ." ".$_SESSION['uname']."<br>";
        echo"<a href='index.html'>index page</a><br>";
        echo"<br><a href='sesslogout.php'><input type='button' value='logout' name='logout'></a>";

    }
else{
    $username=$_POST['user'];
    $password=$_POST['pass'];

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
            header("location:sess1.php");


        }

        else
        {
            echo"<script>alert('username or password is incorrect')</script>";
            // echo"<script>location.href='sess.html'</script>";
        }
}

?>