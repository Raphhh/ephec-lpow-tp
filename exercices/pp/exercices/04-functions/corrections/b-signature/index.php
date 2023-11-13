<?php

// déclaration de la fonction
function signature($value)
{
    if ($value < 0) {
        return -1;
    }
     if ($value > 0) {
        return 1;
    }
    return 0;
}

// on appelle la fonction pour tester son comportement
$a = (float)($_GET['number'] ?? 0);
$result = signature($a);

var_dump($a, $result);
