<?php

$a = 5;
$b = 3;

$c = $a;
$a = $b;
$b = $c;

var_dump($a, $b, $c);
