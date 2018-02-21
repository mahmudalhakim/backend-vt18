<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>My Cat Album</title>
  </head>
  <body class="container">
    <h1>My Cat Album</h1>

<?php
$cats = [
    ["Katt 1" , "cat1.jpg" , "CA01"], 
    ["Katt 2" , "cat2.jpg" , "CA02"], 
    ["Katt 3" , "cat3.jpg" , "CA03"], 
];
?>

<div class="row">

<?php 
foreach($cats as $cat){
?>

<!-- Starta en kolumn -->
<div class="col-sm-4">

<div class="card">
  <img class="card-img-top" src="images/<?=$cat[1]?>" alt="<?=$cat[0]?>">
  <div class="card-body">
    <h5 class="card-title"><?=$cat[0]?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="exempel-23.php?id=<?=$cat[2]?>&img=<?=$cat[1]?>" 
       class="btn btn-primary">Visa mer...</a>
  </div>
</div>


</div><!-- avsluta en kolumn -->


<?php
} // avsluta foreach
?>
</div> <!-- row -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>