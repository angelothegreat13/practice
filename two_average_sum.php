<?php

// Sum the value of array, Average the value of array
function average_sum_of_array($arr)
{
    $total = 0;
    $n = count($arr);

    for ($i=0; $i<$n; $i++) {
        $total += $arr[$i];
    }

    print($total / $n);
}

$arr = [5,10,1,20,20,10];
average_sum_of_array($arr);