<h1>Arbeta med sessioner (Exempel 15)</h1>
<h2>Starta en session</h2>
<?php
    session_start();
?>

<h2>Hämta en array som finns i sessionen</h2>
<h3>
<?php
   // Skriv ut en hel array med print_r
   print "<pre>";
   print_r ($_SESSION['kart']);
   print "</pre>";

   // Skriv ut en array som en HTML-Lista
   echo "<ul>";
   foreach($_SESSION['kart'] as $product){
    echo "<li>$product</li>";
   }
   echo "</ul>";
?>
</h3>


<h3>
    <a href="exempel-16.php">Logga ut (ta bort sessionen)</a>
</h3>




<h2>Skriv ut hela sessionen</h2>
<h3>
    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</h3>


<br><br><br><br><br><br>


