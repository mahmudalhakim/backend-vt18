<h1>Skicka e-post via PHP</h1>
<p>OBS! Vi behöver en mail-server!</p>

<?php

    ini_set("display_errors",1);

    mail("xxxxxxxxxxxxxxxxx" , 
         "Hej Från Backend" , 
        "Detta är bara ett testmeddelande",
        "From: info@nackademin.se"
    )
?>