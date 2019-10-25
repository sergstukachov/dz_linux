<?php
$kv = 33;
$maxEtag = 5;
$kolKv = 4;
$kol_et = ceil($kv / $kolKv);
echo 'Podzd =' . ceil($kol_et / $maxEtag) .'</br>';
echo 'Etag = ' . ceil($kol_et / $maxEtag) . '</br>';
echo 'kv = ' . $kv . '</br>';


