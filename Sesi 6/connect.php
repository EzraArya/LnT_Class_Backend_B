<?php 
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "sesi6";

    $conn = mysqli_connect(
        $dbHost, 
        $dbUser, 
        $dbPass, 
        $dbName
    );
    
    if (!$conn) {
        die("Something went Wrong");
    } 
?>