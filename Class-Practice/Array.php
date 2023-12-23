<?php
    #Indexed array
    #Associative array
    $a ="hawana";
    $b = 20;
    $array =['f1'=>'apple', 'f2'=>'orange','f3'=>'grapes'];
    print_r($array);
    echo "<br>";
    echo $array['f1'];
    // for($i=0;$i<3;$i++){
    //     echo "$array[$i] <br>"; 
    // }  

    #database connection
    $connect = mysqli_connect('localhost','user_name','password','database_name');
    if($connect){
        echo "Connection established";
    }else{
        echo "Connection not established" .mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">
    
</head>
<body>
    
</body>
</html>