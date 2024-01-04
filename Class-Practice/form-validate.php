<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        echo " You are so caring";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="get">
        <input name="username" />
        <button type="submit">Save</button>
    </form> -->
    <!-- <form method="POST">
        <input name="username" placeholder="username">
        <input name="password" placeholder="password">
        <button type="submit">Send</button>
    </form> -->
    <form action="/" method="POST">
        <input name="search" placeholder="Search something">
        <button type="submit">Search</button>
    </form>
</body>
</html>