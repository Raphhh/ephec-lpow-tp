<?php

function absolute($value)
{
    if ($value < 0) {
        return -$value;
    }
    return $value;
}

$a = (float)($_GET['number'] ?? 0);
$result = absolute($a);

var_dump($a, $result);
