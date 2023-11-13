<?php

$number = (int)($_GET['number'] ?? 0);

echo 'Table de ' . $number . '<br>';

for ($i = 0; $i <= 10; $i++) {
    $result = $i * $number;
    echo "$i * $number = $result";
    echo '<br>';
}

