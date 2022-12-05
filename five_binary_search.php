<?php 

// recursive binary search
function recursive_binary_search($arr, $x , $left, $right)
{
    if ($left <= $right) 
    {
        $mid = floor( ($left + $right) / 2 );

        if ($arr[$mid] == $x) {
            return $mid;
        } 
        elseif ($arr[$mid] < $x) {
            return recursive_binary_search($arr, $x, $mid + 1, $right);
        }
        else {
            $right = $mid - 1;
            return recursive_binary_search($arr, $x, $left, $mid - 1);
        }
    }

    return false;
}

$arr = [1,2,5,8,13,22,33,46,52,61];
$x = 52;
$left = 0;
$right = count($arr) - 1;
$result = recursive_binary_search($arr, $x, $left, $right);

if (!$result) {
    echo $x." doesnt exist";
} else {
    echo $x." exists at index ".$result;
}