<?php 

$answer = $_GET['answer'] ?? '';
$message = '';

switch ($answer) {
    case '':
        $message = 'Une réponse est requise.';
        break;
    case 'Bruxelles':
    case 'Brussel':
    case 'Brussels':
        $message = 'Réponse correcte.';
        break;
    default:
        $message = 'Mauvaise réponse.';
}

var_dump($answer, $message);
