<?php

/**
 * Directions
 * Given a string, return the character that is most
 * commonly used in the string.
 * --- Examples
 * maxChar("abcccccccd") === "c"
 * maxChar("apple 1231111") === "1"
 */

$array = str_split('hello');

$charMap = [];
$max = 0;
$maxChar = '';

foreach ($array as $value) {
    if(isset($charMap[$value])) {
        $charMap[$value]++;
    } else {
        $charMap[$value] = 1;
    }
}

foreach ($charMap as $key => $value) {
    if ($charMap[$key] > $max) {
        $max = $charMap[$key];
        $maxChar = $key;
    }
}

echo "most commonly used in the string is " . $maxChar;