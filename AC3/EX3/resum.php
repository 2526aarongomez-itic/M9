<?php
session_start();

if (!isset($_SESSION['vi'])) {
    $_SESSION['vi'] = 0;
}
if (!isset($_SESSION['formatge'])) {
    $_SESSION['formatge'] = 0;
}

$preu_vi = 10;
$preu_formatge = 5;

$total_vi = $_SESSION['vi'] * $preu_vi;
$total_formatge = $_SESSION['formatge'] * $preu_formatge;
$total = $total_vi + $total_formatge;
?>

<html>
<body>
    <h1>Resum de la compra</h1>

    <?php if ($total == 0): ?>
        <p>La cistella està buida.</p>
    <?php else: ?>
        <p>Vi negre: <?php echo $_SESSION['vi']; ?> x <?php echo $preu_vi; ?> € = <?php echo $total_vi; ?> €</p>
        <p>Formatge: <?php echo $_SESSION['formatge']; ?> x <?php echo $preu_formatge; ?> € = <?php echo $total_formatge; ?> €</p>
        <h3>Total: <?php echo $total; ?> €</h3>

        <form action="confirmar.php" method="post">
            <button type="submit">Confirmar compra</button>
        </form>
    <?php endif; ?>

    <br>
    <a href="index.html">Tornar a la botiga</a>
</body>
</html>