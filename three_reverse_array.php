<?php

// Reverse array
function reverse_array($arr)
{
    $reversedArr = [];
    $n = count($arr);
    
    for ($i=$n-1; $i>=0; $i--) {
        $reversedArr[] = $arr[$i];
    }
    
    print_r($reversedArr);
}

function iterative_reverse_arr($arr)
{
    $start = 0;
    $end = count($arr) - 1;
    
    while ($start < $end) 
    {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
    
    print_r($arr);
}

$arr = [1,2,3,4,5];
iterative_reverse_arr($arr);
// reverse_array($arr);