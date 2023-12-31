<?php
class CustomException extends Exception {}

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new CustomException("Cannot divide by zero");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 2);
    echo "Result: $result<br>";

    $result = divide(5, 0); // This will throw an exception
    echo "This line won't be executed.";
} catch (CustomException $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    // Catching a more general Exception class (if needed)
    echo "Caught a generic exception: " . $e->getMessage() . "<br>";
} finally {
    // Code that will be executed regardless of whether an exception was thrown
    echo "Finally block.<br>";
}
?>
