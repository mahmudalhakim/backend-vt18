<?php

// print_r ($_GET);

// Förarbete (Viktigt):
// Hämta hudras från URLen (som skickas via index.php)
$breed = $_GET['breed'];
// echo $breed;

// Steg 1: Hämta data via en endpoint
$endpoint = "https://dog.ceo/api/breed/$breed/images";
echo "<h3>" . $endpoint . "</h3>";

$data = file_get_contents($endpoint);
// echo $data;

// Steg 2: JSON till Array
$array = json_decode($data , true);

// Steg 3: Visa bilderna
foreach($array['message'] as $key=>$value){
    echo "<img src='" . $value . "' alt='' width='100'>";
}


// echo "<pre>";
// print_r($array);
// echo "</pre>";