<?php

define('KONST' , 100);
$counter1 = 0;
$number = 0;
$result = 0;
while (1) {
    $number ++;
if (is_int($number) && ($number != 1))  {
    if (($number % 2 != 0) || ($number === 2))  {
        if (($number % 3 != 0) || ($number === 3)) {
            if (($number % 5 != 0) || ($number === 5)) {
                if (($number % 7 != 0) || ($number === 7)) {
                    $counter1++;
                    $result += $number;
                    if ($counter1 === KONST){
                        break ;
                    }
                }
            }
        }
    }
}
}

print_r($result);