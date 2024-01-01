<?php
    // Recursive function to calculate Fibonacci numbers
    function fibonacci($n) {
        if ($n <= 1) {
            return $n;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }

    // Number of Fibonacci numbers to print
    $number_of_terms = 10;

    // Display Fibonacci numbers
    echo "Fibonacci sequence for the first $number_of_terms terms: ";

    for ($i = 0; $i < $number_of_terms; $i++) {
        echo fibonacci($i) . ", ";
    }
?>
