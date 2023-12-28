<?php
    #var_dump() is shows the data type of the variable and gives us the value
    $name = "Hawana";
    $college_name = "kist";
    var_dump($name);

    echo "<br>";
    #function
    function sayHello(){
        echo "Hello World";
    }
    sayHello();

    #function with global variable using global tag
    #lets use $name as the variable
    function showName(){
        global $college_name;
        echo " <br> $college_name";
    }
    showName();

    #function by sending global variable as parameter
    function collegeName($cname){
        echo "<br>$cname";
        return "$cname";
    }
    collegeName($college_name);
    echo "<br>" . collegeName($college_name);
    
    #if-else in php
    $age = 50;
    if($age > 40){
        echo "<br> You are old .";
    }else{
        echo "<br> You are young";
    }

    #for loop function
    for($i=0;$i<10;$i++){
        echo "<br> Hey! Hawana here.";
    }
?>