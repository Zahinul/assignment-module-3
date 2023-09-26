<?php
    function removeEven($numbers){ //callback function that removes even numbers from given list
        if($numbers%2!=0){
            return true;
        }else{
            return false;
        }
    }
    
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    $evenRemovedNumbers = array_filter($numbers,"removeEven");// filters the $numbers array to remove even numbers
    foreach($evenRemovedNumbers as $oddNumber){
        echo "{$oddNumber} ";
    }

    ?>