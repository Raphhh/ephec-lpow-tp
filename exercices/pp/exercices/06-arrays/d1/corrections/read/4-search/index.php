<?php

function searchIndexOf($array, $search)
{
    foreach ($array as $index => $value) {
        if ($search == $value) {
            return $index;
        }
    }
    return null; // valeur par défaut
}

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide', // attention: entrée double!
    'Timide', // attention: entrée double!
    'Simplet',
    'Atchoum',
];

$result = searchIndexOf($dwarves , 'Timide');
var_dump($result);
