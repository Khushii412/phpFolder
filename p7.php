<?php
    echo"array functions \n";
    $arr = array(1, 2, 3, 4, 5); 
    print_r($arr);
    array_pop($arr);
    print_r($arr);
    array_push($arr, 6);
    print_r($arr);
    echo"array length " . count($arr) .".\n";
    array_shift($arr);
    print_r("shifted". print_r($arr, true) . "\n" );
    array_unshift($arr, 12);
    print_r("unshift" . print_r($arr, true) . "\n" );
    sort($arr);
    print_r("sorted array-" . print_r($arr, true) . "\n");
    echo date("y-m-d\n");
    echo date("h:i:sa");
    
?>