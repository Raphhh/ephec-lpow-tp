<?php

// déclaration de la fonction
function calculatePow($base, $exponent)
{
    if ($exponent == 0) {
        return 1;
    }
    if ($exponent == 1) {
        return $base;
    }
    if (($exponent % 2) == 0) {
        return calculatePow(
            $base*$base,
            $exponent/2
        );
    }
    return $base * calculatePow(
        $base,
        $exponent-1
    );
}

// on appelle la fonction pour tester son comportement
// note: la structure des boucles sera vue plus tard dans le cours

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        $result = calculatePow($i, $j);
        echo "$i^$j = $result";
        echo '<br>';
    } 
} 
