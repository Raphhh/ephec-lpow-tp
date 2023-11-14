<?php

// déclaration de la fonction
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        return null;
    }
    return $dividend/$divisor;
}

// on appelle la fonction pour tester son comportement
$dividend = (float)($_GET['dividend'] ?? 0);
$divisor = (float)($_GET['divisor'] ?? 0);
$result = divide($dividend, $divisor);

var_dump($dividend, $divisor, $result);