<?php
    #Explain Database connectivity in PHP with program code (Assume necessary data).
    $Servername = "localhost";
    $Username ="root";
    $Password ="root";
    $dbname ="mydatabase";

    $conn =mysqli_connect($Servername,$Username,$Password,$dbname);
    if($conn->connect_error){
        die ("Connection Failed") . mysqli_connect_error();
    }else{
        echo "Connected Established!<br>";
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //Grab the values from HTML form using POST method.
        $email =$_POST["email"];
        $pass =$_POST["password"];

        # auth is the table name in database
        $sql ="SELECT * FROM auth WHERE email = '$email' AND password ='$pass'";

        $result = mysqli_query($conn,$sql);
        if(!$result){
            die("Query Failed".mysqli_error($conn));
        }else{
            if(mysqli_num_rows($result) == 1){
                echo "Login Successfull";
            }
        }
        mysqli_free_result($result);
    }
    mysqli_close($conn);
?>