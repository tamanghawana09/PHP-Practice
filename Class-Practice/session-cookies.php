<?php
    #set session
    session_start();

    $_SESSION['name'] = "hawana";


    #get session?
    $name = $_SESSION['name'];
    var_dump($_SESSION);

    session_destroy();
?>