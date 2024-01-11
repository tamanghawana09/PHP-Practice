<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);

    // Read
    $result = $conn->query("SELECT * FROM users");

    echo "<h2>Users</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']} - {$row['email']}</li>";
    }
    echo "</ul>";

    // Update
    $update_id = 1; // Replace with the ID you want to update
    $new_name = "Updated Name";
    $conn->query("UPDATE users SET name='$new_name' WHERE id=$update_id");

    // Delete
    $delete_id = 2; // Replace with the ID you want to delete
    $conn->query("DELETE FROM users WHERE id=$delete_id");
}
$conn->close();
?>
