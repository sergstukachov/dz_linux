<?php

$array = [ 12, 33, 56, 44, 87, 79, 13 ];
/**
 * @param $array
 * @return int
 */
function bigNumber($array){

 $result = 0;
 foreach ($array as $value){
  $result = ($result < $value) ? $value: $result;

 }
 return $result;
}
echo  'big Number in array ' . $a = bigNumber($array) ."</br>";


//____________________________________________



$arrayStr = [ 'Ram' , 'Rom' , 'Tia' , 'Coffein' ];

function bigString($arrayStr){

 $result = 0;
 foreach ($arrayStr as $value){
  $result = (strlen($result) < strlen($value)) ? $value: $result;

 }
 return $result;
}
echo  'big string in array ' . $a = bigString($arrayStr);







 ?>