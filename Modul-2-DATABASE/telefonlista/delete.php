<h1>TA BORT EN RAD</h1>

<?php

// Logga in i databasen
require_once('connect.php');

echo "<pre>";
print_r($_GET);
echo "</pre>";

// Hämta en nyckel från select.php
$telefon = $_GET['telefon'];

// Skapa en SQL-sats
$query = "DELETE FROM kontakt WHERE telefon='$telefon'";
echo $query;

// Kör SQL-satsen
mysqli_query($connection , $query)
    or die(mysqli_error($connection));

// Gå tillbaka till startsidan
header('Location: index.php');



?>