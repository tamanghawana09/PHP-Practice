<?php
// String Manipulation


    // String Concatenation
    $str1 = "Hello";
    $str2 ="World";
    echo $str1 . " ". $str2;
    echo "<br>";

    //String length
    $result = strlen($str1);
    echo $result;
    echo "<br>";

    //Sub-String
    $a = "Kist College has it's own IT Deparment";
    $substring = substr($a , 0, 20);
    echo $substring;
    echo "<br>";

    //String Replacement
    $newstr = str_replace("IT","PHP",$a);
    echo $newstr;
    echo "<br>";

    //Uppercase and lowercase
    $upperCaseStr = strtoupper($a);
    echo $upperCaseStr;
    echo "<br>";

    $lowercase = strtolower($a);
    echo $lowercase;
    echo "<br>";

    //trimming the white spaces
    $new = "       Hello     ";
    echo trim($new);
    echo "<br>";

    //String Search
    $word = "Hello World";
    $pos = strpos($word,"World");
    echo $pos;
    echo "<br>";

    //String splitting
    $string = "This, is a sample ,string for split ,operation.";
    $newstring = explode(",",$string);
    print_r($newstring);
    echo "<br>";

    //String Joining
    $fruits =["apple","banana","orange"];
    $resulting_string = implode(",",$fruits);
    echo $resulting_string;
?>