<?php

$i = (int)($_GET['start'] ?? 0);
$n = (int)($_GET['end'] ?? 0);

while ($i < $n) {
    echo $i;
    $i++;
}
