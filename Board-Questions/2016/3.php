<?php
    #Write a HTML code for the following client registration form and store the client details to the database after performing the required validation using PHP
    $Servername ="localhost";
    $Username = "root";
    $Password="root";
    $dbname="mydatabase";

    $conn =mysqli_connect($Servername,$Username,$Password,$dbname);
    if($conn->connect_error){
        die ("Connection Failed").mysqli_connect_error();
    }else{
        echo "Connection Successfull";
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstname =$_POST["fname"];
        $lastname=$_POST["lname"];
        $address=$_POST["address"];
        $pass = $_POST["password"];
        $gender = $_POST["gender"];
        $country =$_POST["country"];
        $terms = isset($_POST["terms&condition"])?$_POST["terms&condition"]:0;

        $hashed_password = password_hash($pass,PASSWORD_DEFAULT);
        //userdetails is the database table
        $sql = "INSERT INTO userdetails(firstname,lastname,address,password,gender,country,terms) VALUES('$firstname','$lastname','$address','$hashed_password','$gender','$country','$terms')";

        if($conn->query($sql) == TRUE){
            echo "Record Inserted Successfully";
        }else{
            echo "Error: ". $conn->error;
        }
    }
    $conn->close();
?>