<?php

// 54 number in total, write algorithm 54 number to random sequence 
function random_shuffle($numbers)
{
    $n = count($numbers);

    for ($i=$n-1; $i>0; $i--) 
    {
        $r = mt_rand(0, $i);
        $tmp = $numbers[$i];
        $numbers[$i] = $numbers[$r];
        $numbers[$r] = $tmp;
    }

    print_r($numbers);
}

$numbers = range(1,54);
random_shuffle($numbers);
