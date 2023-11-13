<?php

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide',
    'Simplet',
    'Atchoum',
];

$length = count($dwarves);
$randomIndex = rand(0, $length-1);

echo $dwarves[$randomIndex];
