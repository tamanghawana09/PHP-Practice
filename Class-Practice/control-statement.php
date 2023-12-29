<?php 
    $details = array("Hawana","Gathaghar","BIT","Kist College");
    #for loop
    for($i =0;$i<5;$i++){
        echo "Print: $i"; 
        echo "<br>";
    }

    #for each loop
    foreach($details as $i){
        echo $i;
        echo "<br>";
    }
?>