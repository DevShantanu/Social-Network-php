<?php

$dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName= "social";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

 