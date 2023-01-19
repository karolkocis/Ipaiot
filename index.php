<style type="text/css">
    body,td,th {
    font-size: 14px;
    color: #FFFFFF;
    text-align: center;
}
</style>
<?php
$numbers = array(4, 10, 8, 15, 1, 0, 6, 8 ,19, 20, 3);
print_r("Pole: ");
foreach($numbers as $item){
  echo $item . "\n";
}

$largest = max($numbers);
print_r("Najvacsia hodnota: ".$largest."\n");

$smallest = min($numbers);
print_r("Najmensia hodnota: ".$smallest."\n");

sort($numbers);
print_r("Zoradene pole: ");
foreach($numbers as $item){
  echo $item . "\n";
}

?>