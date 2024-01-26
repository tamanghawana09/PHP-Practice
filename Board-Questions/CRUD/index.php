<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
</head>
<body>
    <h2>User Form</h2>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit" name="insert">Insert</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>
