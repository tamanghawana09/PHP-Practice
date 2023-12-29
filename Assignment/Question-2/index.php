<?php
    $num = 10.6;
    $num2 = 11;
    function calculateSum($n1,$n2){
        $result = $n1 + $n2;
        if(is_float($result)){
            $result = ceil($result);
        }
        echo $result;
    }
    calculateSum($num,$num2);
?>