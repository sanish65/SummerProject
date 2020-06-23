<?php
$username="admin";
$password="admin";



// $username=$_POST['user'];
// $password=$_POST['pass'];


session_start();
if(isset($_SESSION['uname']))
    {
        echo"<h1>welcome".$_SESSION['uname']."</h1>";
        echo"<a href='index.html'>index page</a><br>";
        echo"<br><a href='sesslogout.php'><input type='button' value='logout' name='logout'></a>";

    }
else{
    if($_POST['user']==$username && $_POST['pass']==$password)
        {
            $_SESSION['uname']=$username;
            echo"<script>location.href='sess.php'</script>";

        }
        else{
        echo"<script>alert('username or password is incorrect')</script>";
        echo"<script>location.href='sess.html'</script>";

        }
}

?>