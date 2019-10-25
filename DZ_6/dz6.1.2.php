<?php


echo "Give me value for a diamond!\n";

$handle = fopen ("php://stdin","r");
$valDiamond= fgets($handle);
$valDiamond = (int)$valDiamond;
if(($valDiamond >0 ) && ($valDiamond % 2 != 0) ) {

        $input = $valDiamond;

}else{ echo 'incorrect value. try again';}
        $char = '*'; // the character to print

        $padding = STR_PAD_BOTH; // STR_PAD_RIGHT,  STR_PAD_BOTH , STR_PAD_LEFT

        for ($i = 0; $i <= $input; $i++) {
            $stars = '';
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 != 0) {
                    $stars .= " $char";
                }
            }


            echo PHP_EOL . str_pad($stars, $input * 2, ' ', $padding);
        }

        for ($i = 0; $i <= $input; $i++) {
            $stars = '';
            for ($j = $input - 1; $j > $i; $j--) {
                if ($i % 2 != 0) {
                    $stars .= " $char";
                }
            }
            echo PHP_EOL . str_pad($stars, $input * 2, ' ', $padding);
        }
