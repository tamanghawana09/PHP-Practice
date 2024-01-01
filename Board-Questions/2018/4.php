<?php
    //array count
    $numbers = array(1, 2, 3, 4, 5);
    $count = count($numbers);
    echo $count;

    //array push
    $fruits = array("apple", "banana");
    array_push($fruits, "orange", "grape");
    print_r($fruits);

    //array pop
    $colors = array("red", "green", "blue");
    $removedColor = array_pop($colors);
    print_r($colors);
    echo $removedColor; 

    //array merge
    $arr1 = array("a", "b", "c");
    $arr2 = array("d", "e", "f");
    $mergedArray = array_merge($arr1, $arr2);
    print_r($mergedArray);
?>