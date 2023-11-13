<?php

$sentenceParts = include 'sentences.php';

foreach ($sentenceParts as $sentencePart) {
    $length = count($sentencePart);
    $index = rand(0, $length - 1);
    echo $sentencePart[$index] . ' ';
}
