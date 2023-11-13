<?php

// 0. initialisation des nombres
$numbers = [
    2,
    4,
    3,
];

// 1. déterminer la somme
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
var_dump($sum);

// 2. déterminer la moyenne
$length = count($numbers);
$average = $sum / $length;
var_dump($average);
