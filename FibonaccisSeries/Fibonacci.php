<?php

/**
 * Fibonacci series is the one in which you will get your next term by adding previous two numbers.
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
 * The 2 is found by adding the two numbers before it (1+1)
 * The 3 is found by adding the two numbers before it (1+2)
 * And the 5 is (2+3)
 * and so on!
 */


/**
 * @param $num
 * @return int
 * Fibonacci series using Recursive function
 */

function series($num)
{
    if ($num === 0) {
        return 0;
    }

    if ($num === 1) {
        return 1;
    }

    return $this->series($num - 1) + $this->series($num - 2);
}


$num = 12;
for ($i = 0; $i < $num; $i++) {
    echo $this->series($i);
    echo "\n";
}