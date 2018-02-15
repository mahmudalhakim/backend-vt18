<h2>Hämta data via ett formulär och metoden GET</h2>

<form action="exempel-08.php" method="get">
    Förnamn  <br> 
    <input type="text" name="fname">   <br>

    Efternamn  <br> 
    <input type="text" name="lname">   <br>
    
    <input type="submit" value="Visa">
</form>

<?php 
// Skriv ut allt som finns i GET-Arrayen
print "<hr><h3>";
print "<pre>";
print_r($_GET);
print "</pre></h3>";
?>
