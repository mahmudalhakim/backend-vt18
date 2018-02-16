<h1>Arbeta med sessioner (Exempel 14)</h1>
<h2>Starta en session</h2>
<?php
    session_start();
?>

<h2>Hämta en sessionsvariabel</h2>
<h3>
<?php
   $user = $_SESSION['user'];
   echo $user;
   echo '<br>';
   // Eller
   echo $_SESSION['user'];
?>
</h3>

<h2>Ändra en sessionsvariabel</h2>
<h3>
<?php
   $_SESSION['user'] = "Kalle Anka";
   echo $_SESSION['user'];
?>
</h3>

<h2>Skriv ut hela sessionen</h2>
<h3>
    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</h3>
<p>En session i PHP är en superglobal 
    associative array som heter $_SESSION
</p>

<h3>
    <a href="exempel-15.php">Nästa sida (Exempel 15)</a>
</h3>

<br><br><br><br><br><br>


