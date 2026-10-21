<?php

$idiomas = ["es", "ca", "en"];
$monedas = ["€", "£", "$"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $majoredad = isset($_POST['majoredad']);
    setcookie("majoredad", $majoredad ? "1" : "0");
} else {
    $majoredad = ($_COOKIE['majoredad'] ?? "0") === "1";
    
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $idioma = $_POST['idioma'] ?? "";
    if (in_array($idioma, $idiomas)) {
        setcookie("idioma", $idioma);
    }
} else {
    $idioma = $_COOKIE['idioma'] ?? "";
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $moneda = $_POST['moneda'] ?? "";
    if (in_array($moneda, $monedas)) {
        setcookie("moneda", $moneda);
    }
} else {
    $moneda = $_COOKIE['moneda'] ?? "";
}





?>

<HTML>
    <body>
        <h1>Compra el mejor vino en la mejor web!</h1>
        <form action="bodega.php" method="POST">

            <input type="checkbox" name="majoredad" method="POST">Eres menor de edad?</input><br>
            <label for="idioma">Idioma:</label>
            <select name="idioma" id="idioma" method="POST">
                <option value="es" name="idioma">Español</option>
                <option value="ca" name="idioma">Catalán</option>
                <option value="en" name="idioma">Inglés</option>
            </select><br>
            <label for="moneda">Moneda:</label>
            <select name="moneda" id="moneda" method="POST">
                <option value="€" name="moneda">Euros</option>
                <option value="£" name="moneda">Libras</option>
                <option value="$" name="moneda">Dólares</option>
            </select><br>

            <button type="submit">Enviar</button>

        </form>
        <?php if($majoredad): ?>
         <p>Eres menor y no deberias comprar en esta tienda!</p>
        <?php endif;?>

         <?php if ($idioma === "es"): ?>
            <p>Te ofrecemos el vino "Les Terrasses" a un precio de 39<?= $moneda?></p>
        <?php elseif ($idioma === "ca"): ?>
        <p>T'oferim el vi "Les Terrasses" a un preu de 39<?= $moneda?></p>   
        <?php elseif ($idioma === "en"): ?>
            <p>We offer you the wine “Les Terrasses” at a price of <?= $moneda?></p>    
        <?php endif; ?>
    </body>
</HTML>