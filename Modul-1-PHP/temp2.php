<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My Cat Album</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>
<body class="container">
<h1>My Cat Album</h1>
<div class="row">
<?php
$cats = [
  ["Cat 1" , "cat1.jpg"] ,
  ["Cat 2" , "cat2.jpg"] ,
  ["Cat 3" , "cat3.jpg"] 
];
foreach($cats as $cat){
?>
<div class="col-md-4">
  <div class="card">
    <img class="card-img-top" 
    src="images/<?=$cat[1]?>" 
    alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?=$cat[0]?></h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> <!-- card -->
</div> <!-- col-md-4 -->
<?php
} // foreach
?>
</div> <!-- row -->
</body>
</html>