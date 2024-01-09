<?php
    $Servername ="localhost";
    $username = "root";
    $password = "0911";
    $dbname = "mydatabase";

    $conn = mysqli_connect($Servername,$username,$password,$dbname);
    if($conn->connect_error){
        echo "Connection Failed" . mysqli_connect_error();
    }
?>