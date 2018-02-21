<h1>Mer om Arrayer</h1>
<?php

echo "<h2>Indexed Arrays</h2>";

$cats = array("Cat 1" , "Cat 2" , "Cat 3");

foreach($cats as $cat){
    echo "<h2>" . $cat . "</h3>";
}
echo "<hr>";

echo "<h2>Multidimensional Arrays</h2>";

$cats = array(
    array("Cat 1" , "cat1.jpg") ,
    array("Cat 2" , "cat2.jpg") ,
    array("Cat 3" , "cat3.jpg") 
);
foreach($cats as $cat){
    echo "<h3>" . $cat[0] . "</h3>";
    echo "<h3>" . $cat[1] . "</h3>";
}
echo "<hr>";


// Alternativ syntax [] istället för array()
$cats = [
    ["Cat 1" , "cat1.jpg"] ,
    ["Cat 2" , "cat2.jpg"] ,
    ["Cat 3" , "cat3.jpg"] 
];
foreach($cats as $cat){
    echo "<h3>" . $cat[0] . "</h3>";
    echo "<img src='images/" . $cat[1] . "' ><br>";
}

// Tips
// https://www.w3schools.com/php/php_arrays_multi.asp
?>