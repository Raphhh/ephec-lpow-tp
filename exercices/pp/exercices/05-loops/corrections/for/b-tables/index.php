<?php

$number = (int)($_GET['number'] ?? 0);

echo 'Table de ' . $number . '<br>';

for ($i = 0; $i <= 10; $i++) {
    echo "$i * $number = " . $i * $number;
    echo '<br>'; // retour à la ligne pour que ce soit un peu lisible
}

