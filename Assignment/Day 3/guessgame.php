<?php
    session_start();
    if(!isset($_SESSION['num'])){
        $_SESSION['num'] = rand(0,20);
    }
    $num1 = $_SESSION['num'];
    $count = isset($_SESSION['count'])?$_SESSION['count']:0;

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if($count>=5){
            echo "<h2>The game is over!!!<h2>";
            session_destroy();
        }else{
        $num2 = isset($_GET['number'])?$_GET['number']:null;
        if($num2 !== null){
            $count++;

            if ($num2 == $num1) {
                echo "You are correct! <br>";
                echo "Your answer is: $num2 <br>";
                echo "The computer generated answer is: $num1 <br>";
                session_destroy();
            } elseif ($num2 > $num1) {
                echo "<h2>The number is too high</h2>";
            } else {
                echo "<h2>The number is too low</h2>";
            }

            $_SESSION['count'] = $count;
        }
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Guessing game</title>
</head>
<body>
   <form method="GET">
        <h1>Random Guessing game</h1>
        <h2>You can only guess the number from 0 to 20</h2>
        <h3>You will only get 5 chances</h3>
        <input autofocus name="number" placeholder="Enter a number"/>
        <button type="submit">Start Game !</button>
   </form>
</body>
</html>
