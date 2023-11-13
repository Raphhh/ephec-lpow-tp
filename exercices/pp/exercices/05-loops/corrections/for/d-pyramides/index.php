<?php

$n = (int)($_GET['number'] ?? 0);

// cas 1
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo '<br>';
}

echo '<hr>';

// cas 2
for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n-$i; $j++) {
        echo $j;
    }
    echo '<br>';
}

