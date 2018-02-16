<h1>Arbeta med sessioner (Exempel 16)</h1>
<h2>Starta en session</h2>
<?php
    session_start();
?>


<h2>Ta bort alla sessionsvariabler (unset)</h2>
<?php
    session_unset();
?>

<h2>Ta bort sessionen (destroy)</h2>
<?php
    session_destroy();
?>

<h2>Skriv ut hela sessionen</h2>
<h3>
    <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</h3>


<br><br><br><br><br><br>


