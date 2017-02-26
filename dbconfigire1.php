<?php
$host="localhost";
$username="root";
$password="";
$dbnm="flora_info";
$con=mysqli_connect($host,$username,$password,$dbnm);
        if(mysqli_connect_error())
        {
            die("connection problem!!".mysqli_connect_error());
        }
?>