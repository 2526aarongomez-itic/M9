<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit;
}
?>

<html>
<body>
    <p>Usuari: <?php echo $_SESSION['usuari']; ?> - <a href="logout.php">Desconnectar</a></p>
    <hr>
    <h1>Pàgina d'informació 2</h1>
    <p>Aquesta és la segona pàgina d'informació.</p>
    <a href="pagina1.php">Anar a la pàgina 1</a>
</body>
</html>