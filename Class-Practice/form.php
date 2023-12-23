<?php
    //database connection
    $connect = mysqli_connect('localhost','hawana','0911','database');
    
    if($connect){
        echo "Connection Established";
    }else{
        echo "Error".mysqli_connect_error();
    }
    //Method check
    if($_SERVER['REQUEST_METHOD']==="POST"){
        //retrive input from html
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "INSERT INTO 'tbl_db'(NAME,EMAIL,PASSWORD) VALUES ('1','$name','$email','$password')";
        if(mysqli_connect($connect,$query)){
            echo "Signup successful";
        }else{
            echo "Signup failed";
        }
    }
    mysqli_close($connect);

    #alternative method
    // $name =($connect,$_POST['name']);
    // $email =($connect,$_POST['email']);
    // $password =($connect,$_POST['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
    <h3>Signup Page</h3>
    <div class="container">
    <label for="name" id="name">User Name:</label>
    <input type="text"><br><br>
    <label for="email" id="email">Email</label>
    <input type="mail"><br><br>
    <label for="pass" id="pass">Password:</label>
    <input type="text"><br><br>
    <button id ="submit" onclick="">Submit</button>
    </div>
</body>
</html>