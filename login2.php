<?php

session_start();
if(isset($_SESSION['uname']))
    {
       
        // echo "<script type='text/Javascript'>
        //                 alert($_SESSION['uname']);
        //                  </script>";
    // echo"hello".$_SESSION['uname'];
        header("location:index.php");


    }
else{
        echo"<script>location.href='login.php'</script>";

    }

?>