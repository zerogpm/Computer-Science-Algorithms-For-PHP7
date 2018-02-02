<?php

//--- Examples
// capitalize('a short') -----> 'A Short'
// capitalize('look, it is') -----> 'Look, It Is'

$words = "hello there";

$pieces = explode(" ", $words);

foreach ($pieces as $value) {
    $capWords[] =  strtoupper($value[0]) . substr($value, 1);
}

return implode(" ", $capWords);