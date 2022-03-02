<?php 
    $offset='+5:30';
    $con=mysqli_connect("localhost","root","","matka");
    $con->query("SET time_zone='".$offset."';");

    // $baseimage="https://domain.name/admin/";

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
    // echo "Connected successfully";            
?>