<?php
    //      Write a PHP script to calculate and display average temperature,
    // five lowest and highest temperatures.
    // Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
    // 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
    // 73, 75, 79, 73

    $r_temperature = [78,60,62, 68, 71, 68, 73, 85, 66, 64,
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,
    73, 75, 79, 73];

    $length = count($r_temperature);
    $sum = array_sum($r_temperature);
    $average = $sum / $length;
    if(is_float($average)){
        $average = ceil($average);
    }
    echo "Average temperature: " . $average."<br>";

    sort($r_temperature);
    $l_temperature = array_slice($r_temperature,0,7);

    for($i=0;$i<7;$i++){
        echo "Lowest temperature : ". $l_temperature[$i]."C"."<br>";
    }

    $h_temperature = array_slice($r_temperature,-7);
    
    for($i=0;$i<7;$i++){
        echo "Highest temperature:" . $h_temperature[$i]."C"."<br>";
    }

    
?>