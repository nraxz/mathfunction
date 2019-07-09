<?php

$n = 10;

for ($i = 1; $i < $n; $i++) {
    for ($j = 1; $j < $n; $j++) {
        if ($j == 1) {
            echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
        } else {
            echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
        }
    }
    echo "\n";
}