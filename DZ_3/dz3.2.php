<?php


function readTxt($text)
{
    $readTxt = file($text);
    return $readTxt;
}
$readTxt = readTxt('text.txt');//Reads odd lines from a file 'text.txt'

//______________________________

function averageLineLenght($textR){


    $countT = count($textR);//Average line length

    foreach ($textR as $value) {

        $countSt = $countSt + strlen($value);
    }
    $light = $countSt / $countT;//средняя длина
return $light;
}
   $average =  averageLineLenght($readTxt);
echo $average;
//_________________________________
function newText($readTxt, $average){
    $text2 = fopen('text3.txt', 'w+');

    foreach ($readTxt as $value) {
        if (strlen($value) > $average) {
            fwrite($text2, "$value");

        }

    }
return  'Ok' ;
}
newText($readTxt , $average);