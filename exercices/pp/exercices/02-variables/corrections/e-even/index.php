<?php

$a = (int)($_GET['number'] ?? 0);
$isEven = $a % 2 == 0;

var_dump($a, $isEven);
