<?php

// Reverse array
function reverse_array($arr)
{
    $n = count($arr);
    $reversedArr = [];

    for ($i=$n-1; $i>=0; $i--) {
        $reversedArr[] = $arr[$i];
    }
    
    print_r($reversedArr);
}


$arr = [-2,3,4,20,3,4,5];

reverse_array($arr);