<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    div{
        padding:10px;
        margin:10px;
        width:200px;
        height:200px;
        border:1px solid grey;
        float:left;
    }
    </style>

</head>
<body class="container">
    <h1>Arbeta med en befintlig tjänsteserver</h1>
    <h2>Hämta en lista på alla namn</h2>
    <p></p>



<?php

// Steg 1: Hämta data via en endpoint/resource
$data = file_get_contents(
    "https://jsonplaceholder.typicode.com/users");

// Testa att skriva ut JSON   
// echo "<pre>";
// echo $data;
// echo "</pre>";


// Steg 2: Konvertera JSON-data till en PHP-Array
$array = json_decode($data, true);
// OBS! True genererar en associative array

// Testa att skriva ut Arrayen
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// Steg 3: Välj data att presentera/skriva ut
echo "<h3>En enkel lista</h3>";
foreach($array as $key => $value){
   echo $value['name'] . "<br>";
}

echo "<h3>En tabell över alla namn</h3>";
echo "<table class='table'>";
echo "<tr> <th>Namn</th> <th>E-post</th> </tr>";
foreach($array as $nyckel => $varde){
    echo "<tr>";
    echo "<td>" . $varde['name']  . "</td>"  ;
    echo "<td>" . $varde['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Adressetiketter</h3>";
foreach($array as $key => $value){
    echo "<div>";
    echo "<h4>" . $value['name'] . "</h4>";
    echo $value['address']['street'] . "<br>" ;
    echo $value['address']['suite'] . "<br>" ;
    echo $value['address']['zipcode'] . "<br>" ;
    echo $value['address']['city'] . "<br>" ;
   echo "</div>";
 }


?>


</body>
</html>