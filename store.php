<?php

$product = array
    (
        array("Rainbow Six Siege", "Shooter", 19.99),
        array("Besiege", "SandboxBuilder", 7.99),
        array("Monster Hunter: World", "Multiplayer Fantasy", 16.58)
    );
var_dump($product);
echo("___________________________________".PHP_EOL);
$TotalPrice = $product[0][2] + $product[1][2] + $product[2][2];
$operator = sizeof($product);
$AveragePrice = $TotalPrice / $operator;
$AvrgPriceFormat = round($AveragePrice, 2);
echo("Gemiddelde Prijs: €". $AvrgPriceFormat.PHP_EOL);
$strlength1 = strlen($product[0][0]);
$strlength2 = strlen($product[1][0]);
$strlength3 = strlen($product[2][0]);
$totalStrlength = $strlength1 + $strlength2 + $strlength3;
$AvrgStrlength = $totalStrlength / $operator;
echo("Gemiddelde lengte van titel: ".$AvrgStrlength." karakters");



