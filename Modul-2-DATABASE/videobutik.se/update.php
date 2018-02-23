<?php

// TEST
echo "<pre>";
print_r($_POST);
echo "</pre>";


// Logga in i databasen
require_once('connect.php');

// Hämta data från POST
$kundID  = $_POST['KUNDNUMMER'];
$filmID  = $_POST['FILMID'];
$utDatum = $_POST['UTDATUM'];

// Skapa en SQL-sats
$sql = "UPDATE uthyrning 
SET inDatum=CURRENT_TIMESTAMP
WHERE Kund = '$kundID'
AND Film  = '$filmID'
AND utDatum = '$utDatum'
";

// echo $sql;

// Kör SQL-satsen
mysqli_query($connection , $sql);

// Gå tillbaka till startsidan
header('Location: index.php');