<?php

$text = $_GET['text'] ?? '';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
