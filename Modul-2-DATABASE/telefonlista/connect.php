<?php

// Logga in i databasen!

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "telefonlista";

$connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);
if(!$connection){
    echo "<h1>Fel! <br>" . mysqli_connect_error() . "</h1>";
    exit;
}