<?php
session_start();


if (!isset($_SESSION['vi'])) {
    $_SESSION['vi'] = 0;
}
if (!isset($_SESSION['formatge'])) {
    $_SESSION['formatge'] = 0;
}

$producte = $_POST['producte'];
$quantitat = $_POST['quantitat'];


if ($producte == "vi") {
    $_SESSION['vi'] = $_SESSION['vi'] + $quantitat;
}
if ($producte == "formatge") {
    $_SESSION['formatge'] = $_SESSION['formatge'] + $quantitat;
}


header("Location: index.html");
exit;
?>