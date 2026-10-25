<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 2</title>
</head>
<body>
    <p>Usuari: <?php echo $_SESSION['usuari']; ?></p>
    <hr>
    <h1>Pàgina d'informació 2</h1>
    <p>Aquesta és la segona pàgina d'informació.</p>
    <a href="pagina1.php">Anar a la pàgina 1</a>
</body>
</html>