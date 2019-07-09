<?php

function armstrong_number($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
        $sum = $sum + pow((string)$num{$i},$sl);
    }
    if ((string)$sum == (string)$num) {
        return "True";
    } else {
        return "False";
    }
}
echo "Is 153 Armstrong number? ".armstrong_number(153);
echo "\nIs 21 Armstrong number? ".armstrong_number(21);
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";

/*
 * An Armstrong number of three digits is an integer such that the sum of the cubes of its digits is equal to the number itself.
For example, 371 is an Armstrong number since 3**3 + 7**3 + 1**3 = 371.
*
*/