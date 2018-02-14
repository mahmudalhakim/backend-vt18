<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exempel 3</title>
</head>
<body>
<h1>Stränghantering</h1>

<?php

// Visa varningar och felmeddelanden
ini_set("display_errors",1);

$fname = "Mahmud";
$lname = "Al Hakim";
echo "$fname $lname";
echo "<br>";
echo '$fname $lname'; // OBS! Variabelnamn skickas till webbläsaren

echo "<h2>Konkatenering</h2>";
echo "<h3>Använd en punkt för att slå ihop strängar</h3>";
echo $fname . $lname . "<br>";
echo $fname ." ". $lname . "<br>";
echo $fname + $lname; // 0 och två varningar visas!
echo "<br>";
$tal1 = 123;
$tal2 = 345;
echo $tal1 + $tal2; // Summan visas 458
echo "<br>";
echo $tal1 . $tal2; // Konkatenering av värden. 123345 visas

echo "<h2>Escape-sekvenser</h2>";
echo "<p>Mitt förnamn är \"Mahmud\"</p>";
echo "<p>Mitt förnamn är 'Mahmud'</p>";
echo "<p>Mitt förnamn är \'Mahmud\'</p>"; // Fel!
echo '<p>Mitt förnamn är \'Mahmud\'</p>';

echo "<h2>Inbyggda funktioner i PHP</h2>";

$name = "mahmud AL hakim";
echo $name;
echo "<br>";

echo strtoupper($name);
echo "<br>";

echo strtolower($name);
echo "<br>";

echo ucfirst($name);
echo "<br>";

echo ucwords($name);
echo "<br>";

// Visa alltid inledande stor bokstav i varje ord.
echo ucwords( strtolower($name) );
echo "<br>";
// eller
$namn =  ucwords( strtolower($name) );
echo $namn;
echo "<br>";

echo strrev($name);
echo "<br>";

echo strlen($name);

?>

<br><br><br><br><br><br>
</body>
</html>