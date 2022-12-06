<?php

// Sum the value of array, Average the value of array
function average_sum($arr)
{
    $sum = 0;
    foreach ($arr as $val) {
        $sum += $val;
    }
    
    print($sum / count($arr));
}

$arr = [10,20,30,40,50];
average_sum($arr);