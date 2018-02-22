<?php
// Hämta data via URLen med hjälp av GET
$namn =  $_GET['namn'];
$epost = $_GET['epost'];

echo "<pre>";
print_r($_GET);
echo "</pre>";

?>

<h1><?=$namn?></h1>
<h2><?=$epost?></h2>

<!-- Steg 4 
 Skicka data vidare via ett formulär 
 OBS! Titta på action 
 -->
<h2>Ett formulär</h2>
<form action="faq3.php?namn=<?=$namn?>&epost=<?=$epost?>" 
      method="post">

Ange ditt namn <br>
<input name="name" type="text" required>
<br>
Ange e-postadress <br>
<input name="email" type="email" required>
<br>

<input type="submit" value="Skicka e-post">
</form>

<?php
