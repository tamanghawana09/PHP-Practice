<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username =$_POST["username"];
        $password= $_POST["password"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }else{
        echo "Connection established";
    }

    //table name = users (for eg)
    $sql = "INSERT INTO users(username,password) VALUES('$username','$password')";

    if($conn->query($sql)===TRUE){
        echo "Record Inserted Successfully";
    }else{
        echo "Error :" .$sql ."<br>" .$conn->error;
    }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Example</title>
</head>
<body>

    //Inserting value in database.
    <label for="username">Username :</label>
    <input type="text" id="username" name="username" required>

    <br>
    <label for="password">Password :</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Submit">
</body>
</html>