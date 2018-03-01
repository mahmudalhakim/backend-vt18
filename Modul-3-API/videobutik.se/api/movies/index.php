<?php
// Att skapa en egen tjänsteserver (Egen RESTFul API)

// Steg 1: Logga in i databasen
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "videobutik";
$connection = mysqli_connect($dbHost , $dbUser, $dbPass, $dbName);
if(!$connection){
    echo "Felmeddelande<br>" . mysqli_connect_error(); 
    exit;
}
// echo "Inloggning till databasen videobutik lyckades!";

// Steg 2: Hämta data från databasen
// Skapa en SQL-sats
$query = "SELECT * FROM film";
// Kör SQL-satsen
$table = mysqli_query($connection, $query)
         or die(mysqli_error($connection));

// Steg 3: Lagra data i en array 
$array = array(); // eller []
while($row = $table->fetch_assoc()){
    // Lägga till med hjälp av []
    $array[] = $row; 
}
// Test
// print ("<pre>");
// print_r($array);
// print ("</pre>");

// Steg 4: Skapa JSON med hjälp av funktionen json_encode()
// Tips: http://php.net/manual/en/function.json-encode.php
$json_string = json_encode($array, JSON_PRETTY_PRINT);
// Skriv ut JSON
echo $json_string;
// OBS! Vi får inte skriva ut extra info

?>