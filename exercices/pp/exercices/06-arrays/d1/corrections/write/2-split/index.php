<?php

$numbers = [
    0, 1, 2, 3, 4, // nombres positifs
    -0, -1, -2, -3, -4, // nombres négatifs
];

$zeros = [];
$positives = [];
$negatives = [];

foreach ($numbers as $number) {
    if ($number > 0) {
        $positives[] = $number;
    } elseif ($number < 0) {
        $negatives[] = $number;
    } else {
        $zeros[] = $number;
    }
}

var_dump($zeros, $positives, $negatives);
