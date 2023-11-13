<?php

// déclaration de la fonction
function divide($a, $b)
{
    if ($b == 0) {
        return null;
    }
    return $a/$b;
}

// on appelle la fonction pour tester son comportement
$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$result = divide($a, $b);

var_dump($a, $b, $result);