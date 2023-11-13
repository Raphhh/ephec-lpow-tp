<?php

$salesFigure = (float)($_GET['number'] ?? 0);

$bonus = 0;
if ($salesFigure > 1000) {
    $bonus = $salesFigure * 0.1;
}

var_dump($salesFigure, $bonus);
