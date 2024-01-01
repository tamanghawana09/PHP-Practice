<?php
    $firstname = "Hawana";
    $lastname = "Tamang";
    function createUsername($a,$b){
        $result = "$a" . "$b";
        $result2 = strtolower($result);
        echo "@".$result2;
    }
    createUsername($firstname,$lastname);
?>