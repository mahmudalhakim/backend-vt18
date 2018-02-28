<h1>Alla hundraser från Dog API</h1>
<?php

// Steg 1: Hämta data via en endpoint/resource
$data = file_get_contents(
    "https://dog.ceo/api/breeds/list/all");
// echo $data;

// Steg 2: JSON -> PHP-Array
$array = json_decode($data , true);


// Steg 3: Presentera info (listor/tabeller m.m.)
echo "<ol>";
foreach($array['message'] as $breed => $sub){
    echo "<li>";
    echo "<a href='bilder.php/?breed=".$breed."' target='_blank'>"; 
    echo ucfirst($breed);
    echo "</a>";
        echo "<ol type='I'>";
            foreach($sub as $sub_breed){
                echo "<li>";
                echo ucfirst($sub_breed); 
                echo "</li>";
            }
        echo "</ol>";

    echo "</li>";
}
echo "</ol>";

echo "<hr>TEST";
echo "<pre>";
print_r($array);
echo "</pre>";
?>

