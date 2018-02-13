<?php

/**
 * Write a function that accepts a positive number N.
 * The function should echo a stro shape
 * with N levels using the # character. Make sure the steps has
 * spaces on the right hand side
 * ----example
 * steps(2)
 * '# '
 * '##'
 *
 * steps(3)
 * '# '
 * '## '
 * '###'
 */


function steps($n) {

    $n = 3;

    for ($row = 0; $row < $n; $row++) {

        $stair = '';

        for ($column = 0; $column < $n; $column++) {

            if ($column <= $row) {
                $stair .= '#';
            } else {
                $stair .= ' ';
            }
        }

        echo $stair . '<br/>';

    }

}

function stepRecursion($n, $row = 0, $stair = '')
{
    if ($n === $row) {
        return;
    }

    if ($n === strlen($stair)) {
        echo $stair . '<br/>';
        return stepRecursion($n, $row + 1);
    }

    if (strlen($stair) <= $row) {
        $stair .= '#';
    } else {
        $stair .= ' ';
    }

    stepRecursion($n, $row, $stair);
}

steps(3);
stepRecursion(3, 0, '');