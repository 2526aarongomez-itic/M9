<?php
if (
    isset($_POST["nom"]) && isset ($_POST["cognom"]) &&
    isset($_POST["email"]) && isset($_POST["missatge"])
) {
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $email = $_POST["email"];
    $missatge = $_POST["missatge"];

    echo "Missatge rebut, $nom $cognom. Gràcies per contactar. Et respondrem a $email";
    echo "<form action= 'index.html' method='get'> <button>Tornar</button></form>";
} else {
    echo "No s'ha desat el missatge. Error.";
    echo "<form action='index.html' method='get'><button>Tornar</button></form>";
}
?>