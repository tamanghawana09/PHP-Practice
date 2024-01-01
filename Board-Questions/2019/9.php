<?php
    // Function to check if a number is prime
    function isPrime($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Display prime numbers between 1 and 100
    echo "Prime numbers between 1 and 100: <br>";

    for ($i = 1; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo $i . ", ";
        }
    }
?>
