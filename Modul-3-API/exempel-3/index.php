<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 3</title>
</head>
<body>

<h1>10 slumpmässiga namn från NamnAPI.se</h1>

<?php
// Steg 1: Hämta data via en endpoint
$data = "http://api.namnapi.se/v2/names.json?limit=10";
// Hämta data i JSON-format
$json = file_get_contents($data);
// echo $json;

// Steg 2: JSON -> PHP-Array
$array = json_decode($json, true);
// print_r($array);

// Steg 3: Presentera information
echo "<ul>";
foreach($array['names']  as $key=>$value){
    echo "<li>";
    echo $value['firstname'] . " " . $value['surname'] . "<br>";
    echo "</li>";
}
echo "</ul>";

?>
</body>
</html>