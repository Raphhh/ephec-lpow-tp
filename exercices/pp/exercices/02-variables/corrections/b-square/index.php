<?php

$a = (float)($_GET['value'] ?? 0);
$result = $a * $a;

var_dump($a, $result);
