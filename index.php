<?php
$numbers = array(4, 10, 8, 15, 1, 0, 6, 8 ,19, 20, 3);
print_r($numbers."\n");

$largest = max($numbers);
print_r("Najvacsia hodnota: ".$largest."\n");

$smallest = min($numbers);
print_r("Najmensia hodnota: ".$smallest."\n");

$sorted = asort($numbers);
print_r("Zoradene pole: ".$sorted);

?>