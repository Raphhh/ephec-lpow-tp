<?php

$number = (float)($_GET['number'] ?? 0);

$message = 'ko';
if ($number >= 10 && $number <= 20) {
    $message = 'ok';
}

var_dump($number, $message);
