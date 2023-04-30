<?php

$conn=mysqli_connect("localhost" ,"root", "", "paradise");

if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}

?>