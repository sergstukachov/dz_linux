<?php


echo "Give it to me!\n";
$handle = fopen("php://stdin", "r");
$number = fgets($handle);
//$number = 1003;
switch ($number) {
    case 100:
        echo "Thanks, man!";
        break;
    case $number > 10 && $number < 100:
        echo "OK :(";
        break;
    case $number > 1000:
        echo "\n!!!!WOOOOWWWW!!!\n";
        break;
    default:
        echo "WHAAAAT????";
        break;
}
