<?php
echo "enter  numbers a \n";
$handle1 = fopen ("php://stdin","r");
    $a = fgets($handle1);
echo "enter  numbers b \n";
    $handle2 = fopen ("php://stdin","r");
        $b = fgets($handle2);

//$a = 5;
//$b= 7;
if($a % 2 != 0 && $b % 2 != 0 ){
    echo '$a + $b = even ';
} elseif($a % 2 != 0 || $b % 2 != 0 ){
    echo '$a + $b = not even ';
} else{
    echo '$a + $b =  even ';
}