<?php

echo "Give me the Fizz!\n";
$handle1 = fopen("php://stdin", "r");
$fizz = fgets($handle1);
echo "Give me the Buzz!\n";
$handle2 = fopen("php://stdin", "r");
$buzz = fgets($handle2);
echo "Give me the Atazz!\n";
$handle3 = fopen("php://stdin", "r");
$atazz = fgets($handle3);


for ($i = 1; $i <= $atazz; $i++) {
    if (($i % $fizz == 0) && ($i % $buzz == 0)) {
        echo "fb ";
    } elseif ($i % $fizz == 0) {
        echo "f ";
    } elseif ($i % $buzz == 0) {
        echo "b ";
    } else echo "$i ";
}