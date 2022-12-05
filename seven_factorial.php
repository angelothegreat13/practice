<?php

// Use function recursion to find the factorial of 100
function factorial($num)
{
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}


$num = 100;
echo factorial($num);