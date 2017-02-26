<?php
    include("dbConfigire1.php");
    if(isset($_POST["login"]))
    {
            $ueml=$_POST["u_eml"];
            $upass=$_POST["u_pass"];
            
        $q="select *from customer where email='$ueml' and password='$upass'";
        $r=mysqli_query($con,$q);
        if(mysqli_num_rows($r)==1)
        {
            session_start();
            $_SESSION["u_eml"]=$ueml;
            header("location:user_profile.php");
        }
        else
        {
            header("location:flora_login.php?err=uns");
        }
    }
?>