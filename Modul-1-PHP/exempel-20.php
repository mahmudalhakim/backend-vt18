<h1>Mer om Arrayer</h1>
<?php

// Skapa en array med array()
$cats = array("Katt 1" , "Katt 2" , "Katt 3");

// Alternativ syntax
// Skapa en array med []
$cats = ["Cat 1" , "Cat 2" , "Cat 3"];
echo $cats . "<br>";
echo "<pre>";
print_r($cats);
echo "</pre>";

// Skriv ut en array
foreach($cats as $cat){
    echo "<h2>" . $cat  . "</h2>";
}


// Arbeta med multidimenstionella arrayer
$cats = array(
    array("Cat 1" , "cat1.jpg") , 
    array("Cat 2" , "cat2.jpg") , 
    array("Cat 3" , "cat3.jpg") 
);


// Alternativ syntax
// Skapa en array med []
$cats = [
    ["Katt 1" , "cat1.jpg"] , 
    ["Katt 2" , "cat2.jpg"] , 
    ["Katt 3" , "cat3.jpg"] 
];
echo "<hr>";
echo $cats . "<br>";
echo "<pre>";
print_r($cats);
echo "</pre>";

echo "<h2>Mina katter</h2>";
foreach($cats as $cat){
    echo "<h3>".  $cat[0] . "</h3>";

    // <img src="filsökväg och filnamn" alt="alternativ text">
    echo "<img src='images/".  $cat[1] . "' alt='Test'>";
}
?>