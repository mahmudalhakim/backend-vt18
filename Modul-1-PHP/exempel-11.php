<h1>Funktioner</h1>

<form action="exempel-11.php" method="get">
    Ange tal 1:  <br>
    <input type="number" name="tal1" required>  <br>
    Ange tal 2:  <br>
    <input type="number" name="tal2" required>  <br>
    <input type="submit" value="Beräkna!">
</form>





<?php
    // Skapa en funktion plus 
    function plus($a , $b){
        return $a+$b;
    }
    // Skapa en funktion minus 
    function minus($a , $b){
        return $a-$b;
    }

    // Hämta talen från GET-Arrayen
    if(isset($_GET['tal1']) && isset($_GET['tal2'])){

        $tal1 = $_GET['tal1'];
        $tal2 = $_GET['tal2'];

        echo "<h2>$tal1 + $tal2 = ";
       // Anropa funktionen plus
        echo  plus($tal1, $tal2);
        echo "</h2>";

        echo "<h2>$tal1 - $tal2 = ";
        // Anropa funktionen minus 
        echo  minus($tal1, $tal2);
        echo "</h2>";
    }
    
    
    


?>