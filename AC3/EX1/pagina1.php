<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    header("Location: index.html");
    exit;
}
?>

<html>
    <body>
        <p>Usuari: <?php echo $_SESSION['usuari'];?></p>
        <hr>
        <h1>Pagina d'informacio 1</h1>
        <p>Aquesta es la primera pagina d'informacio.</p>
        <a href="pagina2.php">Anar a la pagina 2</a>
    </body>
</html>