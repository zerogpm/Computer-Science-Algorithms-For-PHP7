<?php

// --- Directions
// Given an integer, return an integer that is the reverse
// ordering of numbers.
// --- Examples
//   reverseInt(15) === 51
//   reverseInt(981) === 189
//   reverseInt(-15) === -51
//   reverseInt(-9) === -9

$number = 9;

$reversed = strrev((string)$number);

if ($number < 0) {
    return (int)$reversed * -1;
}

return $reversed;