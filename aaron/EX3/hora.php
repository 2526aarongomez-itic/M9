<?php
date_default_timezone_set('Europe/Madrid');

$hora= (int)date('G');

if ($hora >= 5 && $hora <= 14){
        echo "Bon dia l'hora del servidor es $hora";
    }
elseif ($hora >= 14 && $hora <= 19) {
     echo "Bona tarda, l'hora del servidor es $hora";
    }
else {
    echo "Bona nit, l'hora del servidor es $hora";
}

?>