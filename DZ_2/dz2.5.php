<?php


echo "Please enter the speed of your car \n";
$handle = fopen("php://stdin", "r");
$speedCar = fgets($handle);

echo ($speedCar < 60 ) ? "Hey, girl!": "MAAAN!";
