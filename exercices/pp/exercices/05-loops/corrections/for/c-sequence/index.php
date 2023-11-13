<?php

$start = (int)($_GET['start'] ?? 0);
$end = (int)($_GET['end'] ?? 0);

$result = '{';

for ($i = $start; $i <= $end; $i++) {
    $result .= $i;
    if ($i < $end) {
        $result .= ',';
    }
}

$result .= '}';

echo $result;