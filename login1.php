<?php



    $username=$_POST['name1'];
    $password=$_POST['pass1'];

// if(empty($_POST["name1"]))
// {
//     if(empty($_POST["pass1"]))
//         {
//             echo "<script type='text/Javascript'>
//             alert('Please enter username and password!! ');
//             </script>";
//             include('login.php');
            
    
//         }
//     else{
//             echo "<script type='text/Javascript'>
//             alert('Please enter password!! ');
//             </script>";
//             include('login.php');
            
//         }
// }
// else
// {
//     echo "<script type='text/Javascript'>
//     alert('Please enter username!! ');
//     </script>";
//     include('login.php');
    
// }





if($username == "admin")
    {
    if($password == "pass")
         {
        header("location:adminindex.html");
        }
    }

$con=mysqli_connect("localhost","root","","VEHICLE_REG");
    if(!$con)
        {
        die("not connected.".mysqli_connect_error());
        }

    $sql="select name1, password1 from registry where name1='$username' and password1='$password'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0)
        {
            session_start();
            $_SESSION['uname']=$username;
            echo"login successful."."hello".$_SESSION['uname'];

            header("location:login2.php");


        }

        else
        {
            echo"<script>alert('Enter Valid username and password')</script>";
            echo"<script>location.href='login.php'</script>";
        }


?>