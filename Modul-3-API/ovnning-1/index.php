<h1>Star Wars API (SWAPI.CO)</h1>
<h2>Alla filmer</h2>
<?php
// Steg 1: Hämta data via en endpoint
$endpoint = "https://swapi.co/api/films/";
$data = file_get_contents($endpoint);
//echo $data;

// Steg 2: JSON -> PHP-Array
$array = json_decode($data, true);

// Steg 3: Presentera information
echo "<ul>";
foreach($array['results'] as $key => $value){
    echo "<li>";
    echo $value['title'] . ", " . $value['release_date'];
    echo "</li>";
}
echo "</ul>";

print("<pre>");
print_r($array);
print("</pre>");
?>