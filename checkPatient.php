<?php
    session_start();
    if(isset($_SESSION['name'])){
        echo "<script> location.href='request.php' </script>";
    }
    else{
        echo "<script> alert('Please login first') </script>";
        echo "<script> location.href='login.php' </script>";
    }
?>