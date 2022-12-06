<?php

// 54 number in total, write algorithm 54 number to random sequence 
function random_shuffle($num)
{
    $n = count($num);
    
    for ($i=$n-1; $i>0; $i--) {
        $r = mt_rand(0,$i);
        $temp = $num[$i];
        $num[$i] = $num[$r];
        $num[$r] = $temp;
    }
    
    print_r($num);
}


$num = range(1,5);
random_shuffle($num);