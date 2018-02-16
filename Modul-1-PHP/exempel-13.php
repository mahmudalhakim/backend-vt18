<h1>Arbeta med sessioner (Exempel 13)</h1>
<h2>Starta en session</h2>
<?php
    session_start();
?>

<h2>Att sätta sessionsvariabler</h2>
<?php
    $_SESSION['user']  = "Mahmud Al Hakim";
    $_SESSION['order'] = "1234";
    $_SESSION['email'] = "mahmud@alhakim.se";
    
    // Lagra en array i sessionen
    $_SESSION['kart'] = ["P0001" , "P0005"];

?>

<h3>
    <a href="exempel-14.php">Nästa sida (Exempel 14)</a>
</h3>

