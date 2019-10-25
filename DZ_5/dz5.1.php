<?php

define("FIVE", 5);
$arr = range(1, 100);
//print_r( $arr);
$sum5in100 = 0;
foreach ($arr as $value)
{
    $sum5in100 += ($value % FIVE )? "": $value;
}
echo $sum5in100;