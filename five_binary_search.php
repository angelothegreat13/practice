<?php

// Binary search using recursion
function iterative_binary_search($arr, $x)
{
    $left = 0;
    $right = count($arr) - 1;
    
    while ($left <= $right) 
    {
        $mid = floor( ($left + $right) / 2 );
        
        if ($arr[$mid] == $x) {
            return $mid;
        } elseif ($arr[$mid] < $x) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    return false;
}

function recursive_binary_search($arr, $x , $left, $right)
{
    if ($left <= $right) {
        $mid = floor( ($left + $right) / 2 );
        
        if ($arr[$mid] == $x) {
            return $mid;
        } elseif ($arr[$mid] < $x) {
            return recursive_binary_search($arr, $x, $mid + 1, $right);
        } else {
            return recursive_binary_search($arr, $x, $left, $mid - 1);
        }
    }
    
    return false;
}


$arr = [1,2,5,8,13,22,33,46,52,61];
$x = 61;
$left = 0;
$right = count($arr) - 1;

// $result = iterative_binary_search($arr, $x);
$result = recursive_binary_search($arr, $x, $left, $right);

if (!$result) {
    echo $x.' not found in array';
} else {
    echo $x.' found in index '.$result;
}

