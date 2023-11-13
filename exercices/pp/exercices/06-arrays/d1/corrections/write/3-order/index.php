<?php

$numbers = [2,4,5,3,1,2];
var_dump($numbers);

$length = count($numbers);

for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length; $j++) {
        if ($numbers[$i] < $numbers[$j]) {
            $tmp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $tmp;
        }
    }
}

var_dump($numbers);
