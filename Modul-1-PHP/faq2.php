<?php
// Hämta data via URLen med hjälp av GET
$namn = $_GET['namn'];
$epost = $_GET['epost'];

echo "<pre>";
print_r($_GET);
echo "</pre>";

?>

<h1><?=$namn?></h1>
<h2><?=$epost?></h2>