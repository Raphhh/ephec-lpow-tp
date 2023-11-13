<?php

function composeMessageFirst($a, $b, $c, $x)
{
    if ($b < 0) {
        return $a . '*' . $x . $b . '=' . $c;
    }
    return $a . '*' . $x . '+' . $b . '=' . $c;
}

function composeMessageSecond($a, $b, $c, $x)
{
    $bAsString = $b;
    if ($b >= 0) {
        $bAsString = '+' . $b;
    }

    $cAsString = $c;
    if ($c >= 0) {
        $cAsString = '+' . $c;
    }

    return $a . '*' . $x . '²' . $bAsString . '*' . $x . $cAsString . '=0';
    
}

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$c = (float)($_GET['c'] ?? 0);
$x = 0; 
$x1 = 0;
$x2 = 0;
$message = '';

if ($a == 0) { // équation du premier degré

    $a = $b;
    $b = $c;
    $c = 0;

    if ($a != 0) {
        $x = ($c-$b)/$a;
        $message = composeMessageFirst($a, $b, $c, $x);
    } else {
        $message = 'pas de solution réelle';
    }

} else { //équation du second degré

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta == 0) {
        //x vaut 1 seule valeur
        $x = -($b/(2*$a));
        $message = composeMessageSecond($a, $b, $c, $x);

    } elseif ($delta > 0) {
        //x vaut 2 valeurs

        $x1 = (-$b-sqrt($delta)) / (2*$a);
        $message1 = composeMessageSecond($a, $b, $c, $x1);

        $x2 = (-$b+sqrt($delta)) / (2*$a);
        $message2 = composeMessageSecond($a, $b, $c, $x2);

        $message = $message1 . ' et ' . $message2;

    } else {
        $message = 'pas de solution réelle';
    }

}

var_dump($a, $b, $c, $delta, $x, $x1, $x2, $message);
