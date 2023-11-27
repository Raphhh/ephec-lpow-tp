<?php

$nombre = (float)($_GET['value'] ?? 0);
$result = $nombre * $nombre;

var_dump($nombre, $result);
