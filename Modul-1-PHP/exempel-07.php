<?php
define("PAGE_TITLE", "Exempel 7");
include 'header.php'
?>

<h2>Hämta data via URLen</h2>
<p>
    <a href="exempel-07.php?namn=Mahmud&age=45">
        Visa Mahmud
    </a> <br>
    <a href="exempel-07.php?namn=Kalle&age=10">
        Visa Kalle
    </a>
</p>
<h3>Hej
<?php

// Skicka namnet om det finns data att hämta från URLen
// annars (om data saknas) skicka en tom sträng 
echo $_GET['namn'] ?? '';

if (isset($_GET['age'])) {
    echo "<br>Du är " . $_GET['age'] . " år gammal.";
}

// Skriv ut allt som finns i GET-Arrayen
print "<pre>";
print_r($_GET);
print "</pre>";

?>
</h3>




<?php include 'footer.php'?>
