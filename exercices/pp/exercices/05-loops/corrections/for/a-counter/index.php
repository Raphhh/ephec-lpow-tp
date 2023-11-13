<?php

$n = (int)($_GET['number'] ?? 0);

// De 0 jusqu'à n-1 (ex, pour n==5: "01234").
for ($i = 0; $i < $n; $i++) {
    echo $i;
}

echo '<hr>';

// De 1 jusqu'à n (ex, pour n==5: "12345").
for ($i = 1; $i <= $n; $i++) {
    echo $i;
}

echo '<hr>';

// De n jusqu'à 1 (ex, pour n==5: "54321").
for ($i = $n; $i >= 1; $i--) {
    echo $i;
}

echo '<hr>';
