<?php
// Att vidarebefrodra data från arrayen 
// till formuläret och vidare till olika mail

// Steg 1
// Skapa en array och lagra data 
$array = array();
// Eller
$personer = [
    ["Mahmud Al Hakim" , "mahmud@alhakim" , 45 ] ,
    ["Kalle Anka"      , "kalle@anka.se"  , 15 ] ,
];

// Skriv ut allt
echo "<pre>Visa en snygg ";
print_r($personer);
echo "</pre>";
echo "<hr>";

// Steg 2
// Hämta data från arrayen med hjälp av indexering []
// Skriv ut alla namn
foreach($personer as $person){
   echo $person[0] . "<br>";
}
echo "<hr>";

// Skriv ut alla e-postaddesser
foreach($personer as $person){
    echo $person[1] . "<br>";
}
echo "<hr>";

// Skriv ut en tabell över namn och e-post
echo "<h2>En tabell från en array</h2>";
echo "<table border=1>";
echo "<tr> <th>Namn</th> <th>E-post</th> </tr>";
foreach($personer as $person){
    echo "<tr>";
    echo "<td>" . $person[0] . "</td>";
    echo "<td>" . $person[1] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<hr>
<table border="1">
<tr><th>Namn</th><th>E-post</th></tr>
<?php foreach($personer as $person) : ?>
<tr>
<td> <?php echo $person[0] ?></td>
<td> <?=$person[1]?> </td>
</tr>
<?php endforeach; ?>
</table>


<?php
// Skriv ut en lista över namn och e-post
echo "<h2>En lista från en array</h2>";
echo "<ul>";
foreach($personer as $person){
echo "<li>$person[0], $person[1]</li>";
}
echo "</ul>";

// Steg 3
// Skicka data till en annan sida
// Tips! Använd GET-Metoden (skicka data via URLen)
?>
<h2>Skicka data till en annan sida</h2>
<?php foreach($personer as $person) : ?>
<h3>
    <a href="faq2.php?namn=<?=$person[0]?>&epost=<?=$person[1]?>"   >
        <?=$person[0]?>
    </a>
</h3>
<?php endforeach; ?>

<?php




?>

<br><br><br><br><br><br>