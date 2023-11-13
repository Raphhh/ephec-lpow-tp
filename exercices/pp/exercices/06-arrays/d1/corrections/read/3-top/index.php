<?php

$numbers = [
    2,
    4,
    3,
];

$top = 0;
foreach ($numbers as $number) {
    if ($number > $top) {
        $top = $number;
    }
}

var_dump($top);
