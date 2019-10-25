<?php

$arrayStr = [ 'Ram' , 'Rom' , 'Tia' , 'Coffein' ];

function countLetters($arrayStr)
{
    $strArray = implode("", $arrayStr);
    $count = count_chars($strArray, 1);

    foreach ($count as $i => $val) {
        echo "$val  of ". chr($i). " in the string."."</br>";
    }
}
countLetters($arrayStr);