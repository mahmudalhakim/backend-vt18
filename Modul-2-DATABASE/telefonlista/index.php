<!doctype html>
<html lang="sv">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mahmuds Telefonlista</title>
  </head>
  <body class="container">
    <h1>Mahmuds Telefonlista</h1>

    <form action="insert.php" method="post" class="form-inline my-3">

        <label for="name">Namn</label>
        <input type="text" id="name" 
               class="form-control mx-2" name="name" required>
        
        <label for="telefon">Telefon</label>
        <input type="text" id="telefon" 
               class="form-control mx-2" name="telefon" required>

        <button class="btn btn-outline-primary" type="submit">
            Lägg till
        </button>
    </form>

  </body>
</html>