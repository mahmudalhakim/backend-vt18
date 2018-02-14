<h1>Variabler</h1>

<?php

// String
$webmaster = "Mahmud Al Hakim";
echo $webmaster;
echo "<br>";

// Integer
$heltal = 9999999;

// Float
$flyttal = 99.95;

// Bool
$boolesk = true;

// NULL (Saknar värde)
$ingenting;

// Skriv ut info om variabler
var_dump($webmaster);
echo "<br>";
// OBS! Viktigt variabler är Case Sensitive
var_dump($WEBMASTER); // NULL
echo "<br>";
var_dump($heltal);
echo "<br>";
var_dump($flyttal);
echo "<br>";
var_dump($boolesk);
echo "<br>";
var_dump($ingenting);
echo "<hr>";

// Testa variabler och datatyper
echo is_string($webmaster); // 1
echo "<br>";
echo is_string($heltal);    // Tom utskrift
echo "<br>";
echo is_int($heltal);
echo "<br>";
echo is_numeric($heltal);
echo "<br>";
$heltal = "123465465";
echo is_numeric($heltal); // 1

?>