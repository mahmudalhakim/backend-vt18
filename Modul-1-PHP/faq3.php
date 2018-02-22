<h3>Hämta data från formuläret</h3>

<?php
echo "<pre>My POST ";
print_r($_POST);
echo "</pre>";

echo "<hr>";

echo "<pre>My GET ";
print_r($_GET);
echo "</pre>";

if(isset($_POST['email'])){

// Skicka mail till mig (ägaren)
$to      = "mahmud.alhakim@gmail.com";
$subject = "Ett meddelande från Backend";
$message = "<h3>Hej Mahmud, detta är ett meddelande från ";
$message .= $_POST['name'] . "<br>"; // från formuläret
$message .= $_POST['email']. "</h3>"; // från formuläret
$message .= "<h4>Informationen nedan har hämtats från en array</h4>";
$message .= $_GET['namn'] . "<br>";   // Via URLen
$message .= $_GET['epost'];  // Via URLen
$headers = "From: noreply@nackademin.se"  . "\r\n" ; 
// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0'  . "\r\n" ;
$headers .= 'Content-type: text/html; charset=utf-8'  . "\r\n" ;
mail($to , $subject , $message , $headers);

// Skicka mail till personen som skrev sitt mejl i formuläret
$to      = $_POST['email']; // från formuläret
$subject = "Tack";
$message = "Hej " . $_POST['name'];  // från formuläret
$message .= "Du har valt: ";
$message .= $_GET['namn'];   // Via URLen
$message .= $_GET['epost'];  // Via URLen
$headers = "From: noreply@nackademin.se";
mail($to , $subject , $message , $headers);

}