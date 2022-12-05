<?php
// Note: 
// Please did the test by yourself, not allow to get the answer from Google, in case we wrong evaluate your skill, then waste your time and our time for interview
// not just call the api/function that provide by framework, all the question need to write down the code that how to implement the algorithm

// 54 number in total, write algorithm 54 number to random sequence 
// Random_shuffle()
// {

// } 

// Sum the value of array, Average the value of array


// Reverse array


// {A, 30(weights)}, {B, 40(weights)},{C,20(weights)},{D,10(weights)}, random a number then output the corresponding output,
// Example: if the random result is number(20), then output A, if the random result is number(80), then output C


// Binary search using recursion
// function binsearch($x,$a)
// {

// }

// 6.Given two binary strings a and b , return their sum as a binary string.
// Example :  Input: a = "1010", b = "1011"   Output: "10101"


// 7. Use function recursion to find the factorial of 100


// 8. Merge two sorted arrays( nums1, nums2), the new array should be still be sorted after merge   




// {A, 30(weights)}, {B, 40(weights)},{C,20(weights)},{D,10(weights)}, random a number then output the corresponding output,
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

// random_number($weights);


// Binary search using recursion
function binary_search($x,$a)
{
    // get the start and end
    $start = 0;
    $end = count($a) - 1;

    if ($start > $end) {
        return false;        
    }

    $mid = floor(($end + $start) / 2);

    if ($a[$mid] == $x) {
        return true;
    } 
    // elseif (condition) {

    // } else {
        
    // }
}

$x = 3;
$a = [9,29,39,3,1,2,3,5,7,9];
binary_search($x, $a);
print('Hello Nigga');


// PHP code to get the factorial of a number
// function to get factorial in iterative way
function factorial($number) {
    if ($number <= 1){
        return 1;
    }
    else {
        return $number * factorial($number - 1);
    }
}
 
// Driver Code
$number = 100;
$fact = factorial($number);
echo "Factorial = $fact";
