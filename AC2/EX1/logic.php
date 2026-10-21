<?php
  
  $descompte= 0;
  $contador = 0;

  if(isset($_COOKIE['contador'])){
    $contador = $_COOKIE['contador'];
  }


  if($contador >= 5){
    echo "<h1>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</h1>";
    
  }
  if($contador >= 10){
    echo "<h1>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga"; 
  }

  setcookie("contador", $contador + 1);



?>


<html>
    <header>
        <title>Comptador Visites</title>
    </header>
    <body>
        <h1>Comptador de Visites</h1>
        <form action="logic.php" method="post">
            <label for="descompte">Aplicar descompte: </label>
            <input type="checkbox" id="descompte"> <br><br>

            <input type="submit" id="comprar" value="Comprar!" >
        </form>

        <?php
            echo "Contador de visitas de la página: $contador";
        ?>
    </body>
</html>