<?php

$a = (float)($_GET['number'] ?? 0);

$message = 'ko';
if ($a >= 10 && $a <= 20) {
    $message = 'ok';
}

var_dump($a, $message);
