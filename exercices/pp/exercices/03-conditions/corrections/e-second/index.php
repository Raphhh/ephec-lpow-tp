<?php

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
        if ($b < 0) {
            $message = $a . '*' . $x . $b . '=' . $c;
        } else {
            $message = $a . '*' . $x . '+' . $b . '=' . $c;
        }
    } else {
        $message = 'pas de solution réelle';
    }

} else { //équation du second degré

    $delta = ($b*$b) - (4*$a*$c);

    if ($delta == 0) {
        //x vaut 1 seule valeur
        $x = -($b/(2*$a));
        
        if ($b < 0) {
            if ($c < 0) {
                $message = $a . '*' . $x . '²' . $b . '*' . $x . $c . '=0';
            } else {
                $message = $a . '*' . $x . '²' . $b . '*' . $x . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message = $a . '*' . $x . '²+' . $b . '*' . $x . $c . '=0';
            } else {
                $message = $a . '*' . $x . '²+' . $b . '*' . $x . '+' . $c . '=0';
            }
        }

    } elseif ($delta > 0) {
        //x vaut 2 valeurs

        $x1 = (-$b-sqrt($delta)) / (2*$a);

        if ($b < 0) {
            if ($c < 0) {
                $message1 = $a . '*' . $x1 . '²' . $b . '*' . $x1 . $c . '=0';
            } else {
                $message1 = $a . '*' . $x1 . '²' . $b . '*' . $x1 . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message1 = $a . '*' . $x1 . '²+' . $b . '*' . $x1 . $c . '=0';
            } else {
                $message1 = $a . '*' . $x1 . '²+' . $b . '*' . $x1 . '+' . $c . '=0'; 
            }
        }

        $x2 = (-$b+sqrt($delta)) / (2*$a);

         if ($b < 0) {
            if ($c < 0) {
                $message2 = $a . '*' . $x2 . '²' . $b . '*' . $x2 . $c . '=0';
            } else {
                $message2 = $a . '*' . $x2 . '²' . $b . '*' . $x2 . '+' . $c . '=0';
            }
        } else {
            if ($c < 0) {
                $message2 = $a . '*' . $x2 . '²+' . $b . '*' . $x2 . $c . '=0';
            } else {
                $message2 = $a . '*' . $x2 . '²+' . $b . '*' . $x2 . '+' . $c . '=0';
            }
        }

        $message = $message1 . ' et ' . $message2;

    } else {
        $message = 'pas de solution réelle';
    }

}

var_dump($a, $b, $c, $delta, $x, $x1, $x2, $message);