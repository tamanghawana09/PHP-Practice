<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>

    <?php
    // Recursive function to calculate factorial
    function factorial($n) {
        if ($n === 0 || $n === 1) {
            return 1; // Base case: factorial of 0 or 1 is 1
        } else {
            return $n * factorial($n - 1); // Recursive case
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number entered by the user
        $number = isset($_POST["number"]) ? (int)$_POST["number"] : 0;

        // Validate that the entered value is a non-negative integer
        if ($number >= 0 && filter_var($number, FILTER_VALIDATE_INT)) {
            // Calculate and display the factorial
            $result = factorial($number);
            echo "<p>Factorial of $number is: $result</p>";
        } else {
            echo "<p>Please enter a valid non-negative integer.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="number">Enter a non-negative integer:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Calculate Factorial</button>
    </form>
</body>
</html>
