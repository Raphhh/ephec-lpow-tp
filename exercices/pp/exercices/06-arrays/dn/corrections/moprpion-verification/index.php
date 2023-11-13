<?php

function calculateScoreRow($row, $value)
{
    $score = 0;
    $counter = 0;
    foreach ($row as $cell) {

        if ($cell == $value) {
            $counter++;
            if ($counter == 5) {
                $score++;
                $counter = 0;
            }
        } else {
            $counter = 0; 
        }

    }
    return $score;
}

function calculateScoreGrid($grid, $value) 
{
    $score = 0;
    foreach ($grid as $row) {
       $score += calculateScoreRow($row, $value);
    }
    return $score;
}

$grid = [
    ['o', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x', 'o'],
    ['x', 'x', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x'],
    ['o', 'o', 'o', 'o', 'o', 'o', 'x', 'x', 'x', 'x', 'x', 'x'],
  ];
  
$result = calculateScoreGrid($grid, 'x');
var_dump($result);

$result = calculateScoreGrid($grid, 'o');
var_dump($result);
