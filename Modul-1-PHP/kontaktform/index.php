<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontaktformulär</title>
</head>
<body>
    <h1>Kontaktformulär</h1>
    <form action="mail.php" method="POST">
        <p>Namn  <br>
            <input type="text" name="yourname" 
            placeholder="Ange ditt namn" required>
        </p>
        <p>E-post  <br>
            <input type="email" name="yourmail" required>
        </p>
        <p>Meddelande  <br>
            <textarea name="yourmessage" cols="50" rows="5" required></textarea>
        </p>
        <p>
            <input type="submit" value="Skicka meddelandet">
        </p>
    </form>
</body>
</html>