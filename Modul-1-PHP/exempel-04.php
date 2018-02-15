<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 4</title>
</head>
<body>
<h1>Arrayer i PHP</h1>

<?php

// Skapa en array
$cars = array("Volvo", "BMW");

// Lägg till ett element
$cars[] = "Toyota";

// Indexering
echo "<p>Jag tycker om $cars[0] och $cars[2] </p>";

// Skriv ut antal element
echo count($cars);

echo "<h2>Iterera över en array</h2>";
echo "<h3>While-satsen</h3>";
$i = 0;
while ($i < count($cars)) {
    echo $cars[$i] . "<br>";
    $i++;
    // Eller
    // echo $cars[$i++]; iställer för två olika satser
}

echo "<h3>For-satsen</h3>";
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "<br>";
}

echo "<h3>Foreach-satsen</h3>";
foreach ($cars as $car) {
    echo $car . "<br>"; // OBS! [] behövs ej
}

echo "<h3>Funktionen print_r()</h3>";
print_r($cars); // Echo behövs ej

// Använd pre-taggen för att bevara radbrytningar och space
echo "<pre>";
print_r($cars); // Echo behövs ej
echo "</pre>";

echo "<h3>Skriv ut en array som en HTML-lista</h3>";
echo "<ul>";
foreach ($cars as $car) {
    echo "<li>$car</li>";
}

echo "</ul>";

echo "<h3>Skriv ut en array som en HTML-tabell</h3>";
echo "<table border='1'>";
echo "<tr><th>Bilar</th></tr>";
foreach ($cars as $car) {
    echo "<tr><td> $car </td></tr>";
}

echo "</table>";

echo "<h3>Associative array i PHP</h3>";
$person = array("name" => "Mahmud", "age" => "45");
echo $person["name"] . " är " . $person['age'] . " år gammal";

echo "<h3>Skriv ut en associative array</h3>";
// Skriv ut värdet
foreach ($person as $p) {
    echo "$p <br>";
}

// Skriv ut nyckel och värde
foreach ($person as $key => $value) {
    echo "Nyckel: $key , Värde: $value <br>";
}

echo "<h3>Skriv ut en associative array med print_r</h3>";
echo "<pre>";
print_r($person);
echo "</pre>";

echo "<h3>Skriv ut $_SERVER</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "Min root är: ";
echo $_SERVER["DOCUMENT_ROOT"];

?>

<br><br><br><br><br><br><br><br>
</body>
</html>