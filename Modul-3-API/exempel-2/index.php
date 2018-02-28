<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container">
    <h1>Exempel 2</h1>
    <h2>Visa bilder från JsonPlaceholder</h2>

<?php
// Steg 1: Hämta data (JSON)
$data = file_get_contents(
    "https://jsonplaceholder.typicode.com/albums/1/photos");

// echo $data;

// Steg 2: JSON -> PHP-Array
$array = json_decode($data , true);

// print_r($array);

foreach($array as $key=>$value){
   echo "<a href='" .  $value['url'] . "' target='_blank'>";
   echo '<img src="' .  $value['thumbnailUrl'] .
          '" class="img-thumbnail" alt="">';
   echo "</a>";
}
?>
</body>
</html>