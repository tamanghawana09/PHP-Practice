<?php
    include "database.php";#

    $sql = "SELECT * FROM tasks";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo "Database working";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hey! Hawana here</h1>
    <section>
        <form action="query.php" method="POST">
            <input type="text" name="task" placeholder="Enter your task" >
            <button>Save</button>
        </form>
    </section>
    <section>
        <ul>
            <?php foreach ($rows as $value) {
                echo "<li>" . $value['task']. "</li>";
            }
             ?>
        </ul>
    </section>
    
</body>
</html>
