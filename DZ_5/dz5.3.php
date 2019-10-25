<?php
$start = microtime(true);
define('KONST' , 1000);// 1000 количество получаемых простых чисел, на 1000 программа останавливается
$counter1 = 0;
$number = 0;
$result = [];
while (1) {
    $number ++;
    if (is_int($number) && ($number != 1))  {
        if (($number % 2 != 0) || ($number === 2))  {
            if (($number % 3 != 0) || ($number === 3)) {
                if (($number % 5 != 0) || ($number === 5)) {
                    if (($number % 7 != 0) || ($number === 7)) {
                        $counter1++;
                        $result[] += $number;
                        if ($counter1 === KONST){
                            break ;
                        }
                    }
                }
            }
        }
    }
}

//print_r($result);
echo "sum(a) = " . array_sum($result) . "\n";
echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';

$start2 = microtime(true);
$n =  4363;//4363 последнее обрабатываемое число начиная от 2, на 4363 программа останавливается
$arr2_n = range(2, $n);
$p = 2;
$keyPass = "";
$arrBad_value = [];
foreach ($arr2_n as $key => $value){

    if ($value == $p * 2) {

        $arrBad_value[] = $value ;
        $keyPass = $key + $p;
    }   if ($key === $keyPass){
        $arrBad_value[] = $value ;
        $keyPass += $p;
    }
}
//echo "---------------------- . $p. _______________";
$arr2_n = array_values($arr2_n);
foreach ($arr2_n as $key => $value){
    $p2 = $p;
    if ($value > $p) {
        $p = $value;
    } if ($p2 < $p){
        break;
    }
    }
//echo "---------------------- . $p . _______________";

foreach ($arr2_n as $key => $value){

    if ($value == $p * 2) {
        $keyPass = $key + $p;
        $arrBad_value[] = $value ;
    }   if ($key === $keyPass){
        $arrBad_value[] = $value ;
        $keyPass = $key += $p;
    }
}
//echo "---------------------- . $p. _______________";
$arr2_n = array_values($arr2_n);
foreach ($arr2_n as $key => $value){
    $p2 = $p;
    if ($value > $p) {
        $p = $value;
    } if ($p2 < $p){
        break;
    }
}
foreach ($arr2_n as $key => $value) {

    if ($value == $p * $p) {
        $keyPass = $key + $p;
        $arrBad_value[] = $value ;
    }
    if ($key === $keyPass) {
        $arrBad_value[] = $value ;
        $keyPass += $p;
    }
}
//echo "---------------------- . $p. _______________";
foreach ($arr2_n as $key => $value){
    $p2 = $p;
    if ($value > $p) {
        $p = $value;
    } if ($p2 < $p){
        break;
    }
}
foreach ($arr2_n as $key => $value) {

    if ($value == $p * $p) {
        $keyPass = $key + $p;
        $arrBad_value[] = $value ;
    }
    if ($key === $keyPass) {
        $arrBad_value[] = $value ;
        $keyPass += $p;
    }
}
//echo "---------------------- . $p. _______________";
foreach ($arr2_n as $key => $value){
    $p2 = $p;
    if ($value > $p) {
        $p = $value;
    } if ($p2 < $p){
        break;
    }
}
foreach ($arr2_n as $key => $value) {

    if ($value == $p * $p) {
        $keyPass = $key + $p;
        $arrBad_value[] = $value ;
    }
    if ($key === $keyPass) {
        $arrBad_value[] = $value ;
        $keyPass += $p;
    }
}
//echo "---------------------- . $p. _______________";

foreach ($arr2_n as $key => $value){
    $p2 = $p;
    if ($value > $p) {
        $p = $value;
    } if ($p2 < $p){
        break;
    }
}
foreach ($arr2_n as $key => $value) {

    if ($value == $p * $p) {
        $keyPass = $key + $p;
        $arrBad_value[] = $value ;
    }
    if ($key === $keyPass) {
        $arrBad_value[] = $value ;
        $keyPass += $p;
    }
}
//echo "---------------------- . $p. _______________";

$arrBad_value = array_unique($arrBad_value);//remove doubled values

$result2 =  array_diff($arr2_n, $arrBad_value);//We remove no primes
echo "</br>";

//print_r($result2);
echo "</br>"."sum(b) = " . array_sum($result2) . "\n";
echo 'Время выполнения скрипта: '.round(microtime(true) - $start2, 4).' сек.';