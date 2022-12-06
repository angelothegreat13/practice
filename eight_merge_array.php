<?php

// Merge two sorted arrays( nums1, nums2), 
// the new array should be still be sorted after merge   
function merge_sorted_arrays($arr1, $arr2)
{
    $n1 = count($arr1);
    $n2 = count($arr2);
    $arr3[$n1 + $n2] = array();

    $i = 0;
    $j = 0;
    $k = 0;
 
    // Traverse both array
    while ($i < $n1 && $j < $n2)
    {
        if ($arr1[$i] < $arr2[$j]) {
            $arr3[$k++] = $arr1[$i++];
        } else {
            $arr3[$k++] = $arr2[$j++];
        }
    }

    print_r($arr3);
 
    while ($i < $n1) {
        $arr3[$k++] = $arr1[$i++];
    }
 
    while ($j < $n2) {
        $arr3[$k++] = $arr2[$j++];
    }

    return $arr3;
}
 
$arr1 = [1,2,3];
$arr2 = [2,5,6,17];

$arr3 = merge_sorted_arrays($arr1, $arr2);

// print_r($arr3);
// echo count($arr1) + count($arr2);
// echo count($arr3);
for ($i = 0; $i < count($arr1) + count($arr2); $i++)
    echo $arr3[$i] . " ";
