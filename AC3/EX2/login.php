<?php
session_start();

$usuari = $_POST['usuari'];
$pwd = $_POST['pwd'];

if ($usuari == $pwd && $usuari != "") {
    $_SESSION['usuari'] = $usuari;
    header("Location: pagina1.php");
} else {
    header("Location: index.html");
}
exit;
?>