<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Videobutik</title>
</head>
<body class="container">
    <h1>Videobutik</h1>

<?php
// Databasuppkoppling
require_once('connect.php');

// Skapa en SQL-sats
$query = "SELECT k.namn, f.Titel, u.utDatum, k.kundnummer, f.filmID 
FROM  kund AS k, uthyrning AS u, film as f
WHERE k.kundnummer = u.Kund
AND   f.filmID = u.Film
AND   u.inDatum IS NULL
ORDER BY u.utDatum";

// Kör SQL-satsen
$table = mysqli_query($connection , $query)
          or die (mysqli_error($connection));

// Visa en HTML-tabell
?>

<table class="table">
<tr> 
    <th>Kund</th> 
    <th>Film</th> 
    <th>Uthyrningsdatum</th> 
    <th>Lämna tillbaka</th>
</tr>
<?php while($row = $table->fetch_assoc()) : ?>
<tr>
    <td><?php echo $row['namn'] ?></td>
    <td><?php echo $row['Titel'] ?></td>
    <td><?php echo $row['utDatum'] ?></td>
    <td>
        <form action="update.php" method="post">

            <input type="hidden" name="FILMID"
                   value="<?php echo $row['filmID'] ?>">

            <input type="hidden" name="KUNDNUMMER"
                   value="<?php echo $row['kundnummer'] ?>">

            <input type="hidden" name="UTDATUM" 
                   value="<?php echo $row['utDatum'] ?>">

            <input type="submit" value="Lämna tillbaka" 
                   class="btn btn-outline-danger">
        </form>
    </td>
</tr>
<?php 
// echo "<pre>";
// print_r($row);
// echo "</pre>";

endwhile; ?>

</table>


</body>
</html>