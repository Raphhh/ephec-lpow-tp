<?php

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$c = (float)($_GET['c'] ?? 0);

$message = '';

if ($a != 0) {
    $x = ($c-$b)/$a;
    if ($b < 0) {
        $message = $a . '*' . $x . $b . '=' . $c;
    } else {
        $message = $a . '*' . $x . '+' . $b . '=' . $c;
    }
} else {
    $message = 'pas de solution réelle';
}

var_dump($a, $b, $c, $message);
