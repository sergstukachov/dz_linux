<?php
//Option 1


function readTxt($text)
{
    $text1 = file($text);
    return $text1;
}
$text1 = readTxt('text.txt');//Reads odd lines from a file 'text.txt'
var_dump($text1);

function writeText($text1, $text2)
{
    $text3 = fopen($text2, 'w+');
    foreach ($text1 as $kay => $value) {

        if ($kay % 2 == 0) {
            fwrite($text3, "$value");

        }
    }
    fclose($text3);
    return $text3;
}
writeText(readTxt('text.txt'), 'text2.txt');//Creates a new 'text2.txt file and writes text from function readTxt to it


//_________________________________________________________________________________

//Option 2

function newTxt($text, $text2)
{
    $text1 = file($text);  //Reads file 'text.txt' to variable $text1
    function writeText($text1, $text2)     //Creates a new 'text2.txt' file and writes text from function readTxt to it
    {
        $text3 = fopen($text2, 'w+');
        foreach ($text1 as $kay => $value) {

            if ($kay % 2 == 0) {
                fwrite($text3, "$value");

            }
        }
        fclose($text3);
        return $text3;
    }

    $result = writeText($text1, $text2);
    return $result;
}


newTxt('text.txt', 'text2.txt');
