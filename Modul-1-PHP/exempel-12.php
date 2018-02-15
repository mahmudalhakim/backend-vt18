<?php
    function tabell(){
        echo "<table border=1>";
        echo "<tr><th>x</th><th>x&sup2;</th></tr>";
        for($x=1; $x<=100 ; $x++){

            echo "<tr><td>$x</td> <td>" . $x*$x ." </td></tr>";
        }
        echo "</table>";

    }
    // Anropa funktionen
    tabell();
?>