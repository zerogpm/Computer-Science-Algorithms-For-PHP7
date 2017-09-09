<?php

/**
 * We will first write the divide part followed by the merge or conquer
 * part. PHP has some built-in funcitons to split an array. we will use
 * the array_slice function to do the splitting.
 */
function mergeSort(array $array) : array
{
    $len = count($array);
    $mid = (int) $len / 2;
    if ($len == 1) return $array;

    $left = mergeSort(array_slice($array, 0, $mid));
    $right = mergeSort(array_slice($array, $mid));

    return merge($left, $right);
}

/**
 * As we can see from the code, we split the array in a recursive way until
 * the array size becomes 1. when array size is 1, we start to merge backward
 * Here is the code for the merge function, which will take two arrays, and
 * merge them into one
 */

function merge(array $left, array $right) : array
{
    $combined = [];
    $countLeft = count($left);
    $countRight = count($right);
    $leftIndex = 0;
    $rightIndex = 0;

    /**
     * swap value if left and right are smallest
     */
    while ($leftIndex < $countLeft && $rightIndex < $countRight) {
        if ($left[$leftIndex] > $right[$rightIndex]) {
            $combined[] = $right[$rightIndex];
            $rightIndex++;
        } else {
            $combined[] = $left[$leftIndex];
            $leftIndex++;
        }
    }

    while ($leftIndex < $countLeft) {
        $combined[] = $left[$leftIndex];
        $leftIndex++;
    }

    while ($rightIndex < $countRight) {
        $combined[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $combined;
}

$array = [2,3,1,4];
$newArray = mergeSort($array);
echo implode(",", $newArray);