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
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $query = "SELECT * FROM 'tbl_db' WHERE '$email' == EMAIL AND '$password' == PASSWORD";
        if(mysqli_num_rows($connect,$query) == 1){
            echo "Login Success full";
        }else{
            echo "Login Failed";
        }
    }
    mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Login Page</h3>
    <div class="container">
    <label for="email" id="email">Email</label>
    <input type="mail"><br><br>
    <label for="pass" id="pass">Password:</label>
    <input type="text"><br><br>
    <button id ="submit" onclick="">Submit</button>
    </div>
</body>
</html>