<?php
$host = "localhost";
$username = "root";
$password = "0911";
$database = "mydatabase";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
