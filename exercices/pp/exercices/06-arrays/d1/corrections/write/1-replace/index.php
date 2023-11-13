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

$search = 'Simplet';
$replacement = 'Dur d\'oreille';

foreach ($dwarves as $index => $dwarf) {
    if ($dwarf == $search) {
        $dwarves[$index] = $replacement;
    }
}

var_dump($dwarves);
