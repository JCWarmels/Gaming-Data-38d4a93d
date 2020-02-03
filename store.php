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
echo($AveragePrice);
$AvrgPriceFormat = round($AveragePrice, 2);
echo("Gemiddelde Prijs: €". $AvrgPriceFormat);
$totalStrlength = strlen($product[0][0]) + strlen($product[1][0]) + strlen($product[2][0]);
echo($totalStrlength);



