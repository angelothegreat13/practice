<?php

// {A, 30(weights)}, {B, 40(weights)},{C,20(weights)},{D,10(weights)}, 
// Random a number then output the corresponding output,
// Example: if the random result is number(20), then output A, if the random result is number(80), then output C
function random_number($weights)
{
    $totalWeights = array_sum($weights);
    // print($totalWeights);
    // foreach ($weights as $weight) {
    //     $totalWeights+= $weight;
    // }

    $rand = mt_rand(1, (int) $totalWeights);

    foreach ($weights as $weightKey => $weightValue) {
        $rand -= $weightValue;
        if ($rand <= 0) {
            print($weightValue.'-'.$weightKey.' ');
        }
    }
}

$weights = [
    'A' => 30,
    'B' => 40,
    'C' => 20,
    'D' => 10
];

random_number($weights);