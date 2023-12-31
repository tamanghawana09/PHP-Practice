<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>

    <?php
    // Function to check if a number is prime
    function isPrime($num) {
        if ($num <= 1) {
            return false; // 0 and 1 are not prime
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false; // If the number is divisible by any number other than 1 and itself, it's not prime
            }
        }
        return true; // If no factors found, it's prime
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number entered by the user
        $number = isset($_POST["number"]) ? (int)$_POST["number"] : 0;

        // Validate that the entered value is a positive integer
        if ($number > 0 && filter_var($number, FILTER_VALIDATE_INT)) {
            // Check if the number is prime
            if (isPrime($number)) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        } else {
            echo "<p>Please enter a valid positive integer.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Check Prime</button>
    </form>
</body>
</html>
