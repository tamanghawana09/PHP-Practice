<?php
    include 'Database.php';

    $value = $_POST['task'];

    $sql = "INSERT INTO tasks(task) VALUES('$value')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Failed to insert record".mysqli_error($conn);
    }else{
        header("Location: /");
    }
?>