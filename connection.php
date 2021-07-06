<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "us_trip";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "connection successful";
    ?> 
  
    <script>
        alert('connection successful');
    </script>
    <?php
}else{
    // echo "NO connection";
    die("No connection" . mysqli_connect_error());
}

?>

