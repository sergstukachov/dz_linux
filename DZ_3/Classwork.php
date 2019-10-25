<?php

function squared($x){
    $x *= $x;
    return $x;
}

$x = squared(3);
echo $x;

function yDegreeX($x,$y){     // for the attic

    $sq = $x;

    for ($i = 1; $i < $y; $i++) {

        $x= $x * $sq;

    }
    return $x;
}

echo yDegreeX(3,5);


echo $degree = pow(3 ,5); // check