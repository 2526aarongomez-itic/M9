<?php

    

if (
    isset($_POST["euro"])

) {
    $euro = $_POST["euro"];
    $conversor_euro = $euro * 1.14;


    echo "EL conversor de € a $ es: $conversor_euro.";
};

if (
    isset($_POST["dolar"])
){
    $dolar = $_POST["dolar"];
    $conversor_dolar = $dolar * 0.88;

    echo "El conversor de $ a € es: $conversor_dolar.";
    echo "<form action= 'index.html' method='get'><button type='submit'>Tornar</button></form>";
}

?>