<?php
    $grades = [85,92,78,88,95];
    rsort($grades); //PHP built-in function to sort the indexed array in descending order
    echo "Sorted grades in descending order: ";
    foreach($grades as $grade){
        echo $grade.", ";
    }
?>