<?php 
    //Null datatype
    $isOld = null;
    
    #Array
    array(1,2,3,4);
    [1,2,3,4];

    #Index Array
    $name ="Hawana Tamang";
    $companies =array("Diyal Construction","IIDE");
    $companies_diff = ["Diyal Construction","IIDE"];
    echo $name;
    echo "<br>";
    echo "<pre>";
    print_r($companies_diff);
    echo "</pre>";


    #Associative Array
    $details =array("Cname" =>"Kist College","number" => 9817261378,"location"=>"Baneshwor");
    echo "<br>";
    echo "<pre>";
    print_r($details);
    echo "</pre>";
    echo $details["Cname"];

    #Multidimensional Array
    $numbers = array(array(1,2,3), array(4,5,6), array(7,8,9));
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";
?>
