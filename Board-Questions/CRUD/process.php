<?php
    include 'database.php';

    if (isset($_POST['insert'])) {
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

    
    }

    if(isset($_POST['update'])){
        // Update
        $name = $_POST['name'];
        $email = $_POST['email'];
    
        // Use prepared statement to avoid SQL injection
        $update_sql = "UPDATE users SET email = ? WHERE name = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("ss", $email, $name);
        $stmt->execute();
        $stmt->close();
    
        $result = $conn->query("SELECT * FROM users");
        echo "<h2>Users</h2>";
        echo "The data " . $name . " is updated";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} - {$row['email']}</li>";
        }
        echo "</ul>";
    }
    

    if(isset($_POST['delete'])){
        //Delete
        $name = $_POST['name'];
     

        // Use prepared statement to avoid SQL injection
        $del_sql = "DELETE FROM users WHERE name = ? ";
        $stmt = $conn->prepare($del_sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->close();

        $result = $conn->query("SELECT * FROM users");
        echo "<h2>Users</h2>";
        echo "The data ".$name. " deleted";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} - {$row['email']}</li>";
        }
        echo "</ul>";
    }


    $conn->close();
    
?>