<?php

function calculateScoreRow($row, $player, $win)
{
    $score = 0;
    $counter = 0;
    foreach ($row as $cell) {

        if ($cell == $player) {
            $counter++;
            if ($counter%$win == 0) {
                $score++;
            }
        } else {
            $counter = 0; 
        }

    }
    return $score;
}

function calculateScoreGrid($grid, $player, $win) 
{
    $score = 0;
    foreach ($grid as $row) {
       $score += calculateScoreRow($row, $player, $win);
    }
    return $score;
}

$grid = [
    ['o', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x'],
    ['o', 'o', 'o', 'o', 'o', 'o', 'x', 'x', 'x', 'x', 'x', 'x'],
  ];
  
$pointsX = calculateScoreGrid($grid, 'x', 5);
var_dump($resultX);

$pointsO = calculateScoreGrid($grid, 'o', 5);
var_dump($resultO);


if ($pointsX > $pointsO) {
    echo 'Les X ont gagné!';
} elseif ($pointsX < $pointsO) {
    echo 'Les O ont gagné!';
} else {
    echo 'Egalité!';
}
