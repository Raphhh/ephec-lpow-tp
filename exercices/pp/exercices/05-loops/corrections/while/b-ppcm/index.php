<?php

$a = (int)($_GET['a'] ?? 0);
$b = (int)($_GET['b'] ?? 0);

$am = $a;
$bm = $b;

while ($am != $bm) {
    if ($am < $bm) {
        $am += $a;
    } else {
        $bm += $b;
    }
}

var_dump($am, $bm);
