<?php

function calculate($matrix)
{
    $total = 0;
    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $cell) {
            $total++;
            $sum += $cell;
        }
    }

    $average = 0;
    if ($total) {
        $average = $sum / $total;
    }

    return [
        'total' => $total,
        'sum' => $sum,
        'average' => $average,
    ];
}

//on teste la fonction

$numbers = [
    [1, 2, 3],
    [2, 3, 7],
];

$result = calculate($numbers);
var_dump($result); // ['total' => 6, 'sum' => 18, 'average' => 3]
