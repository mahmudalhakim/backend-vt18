<?php 
    define("SITE_NAME", "Nackademin");
    define("WEBMASTER", "Mahmud Al Hakim");
    define("MOBIL", "08-123 45 67");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITE_NAME ?></title>
</head>
<body>
    <h1>Konstanter i PHP</h1>
    <h2><?=SITE_NAME?></h2>

    <h2>Kontakt</h2>
    <p>Webmaster: <?=WEBMASTER?></p>
    <p>Mobil: <?=MOBIL?></p>
    <hr>
    <h1>Datum och tid</h1>
    <p>
    <?php
        // Fixa rätt tidszon 
        date_default_timezone_set('Europe/Stockholm');

        //echo date("D j M o H.i",strtotime($date)); 
        echo date("Y")     . '<br>';
        echo date("Y-m-d") . '<br>';
        echo date("Y m d") . '<br>';
        echo date("y")     . '<br>';
        echo date("M")     . '<br>';
        echo date("D")     . '<br>';
        echo date("H:i:s") . '<br>';
        echo date("Y-m-d H:i:s") . '<br>';

        // Överkurs
        setlocale(LC_TIME, "sv_SE");
        echo strftime("%A den %d %B %Y");
        // Skriver ut t.ex. Fredag den 16 Februari 2018
        // http://php.net/manual/en/function.strftime.php
    ?>
    </p>
</body>
</html>