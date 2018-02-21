<?php
// Logga in i databasen
// OBS! Vi får tillbaka en $connection
require_once('connect.php');

// Skapa en SQL-sats
$query = "SELECT * FROM kontakt"; 
// Exekvera SQL-satsen
$tabell = mysqli_query($connection , $query) 
          or die(mysqli_error($connection)) ;

echo "<table class='table'>";
echo "<tr><th>Namn</th><th>Telefon</th><th>Ta bort</th></tr>";
while($rad = $tabell->fetch_assoc()){
    // Varje post/rad skickas hit som associative array
    echo "<tr>";
    echo "<td>" . $rad['namn']    . "</td>";
    echo "<td>" . $rad['telefon'] . "</td>";
    echo "<td>
    <a href='delete.php?telefon=". $rad['telefon'] . "' 
       class='btn btn-outline-danger' >
               Ta bort
              </a>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>
