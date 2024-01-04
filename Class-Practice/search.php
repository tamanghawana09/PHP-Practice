<?php
    var_dump($_GET);
    echo "<br>";
    print_r($_GET);

    echo "<br>";
    echo " You are so caring " . $_GET['search'];

    ##POST method
    ## Post ==> $_POST
    ## GET ==>$_GET

    ##redirect to original file
    header("Location: form.html");
?>