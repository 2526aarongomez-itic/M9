<?php

if(
    isset($_POST["preu"]) &&
    isset($_POST["iva"])
){
    $preu= $_POST["preu"];
    $iva= ($_POST["iva"] * 0.01) + 1;
    $resultat= $preu * $iva;

    echo"El càlcul del preu amb el iva es: $resultat";
    echo "<form action= 'index.html' method='get'><button type='submit'>Tornar</button></form>";

} else{
    echo"No se han rebut dades del formulari.";
    echo "<form action= 'index.html' method='get'><button type='submit'>Tornar</button></form>";

}



?>