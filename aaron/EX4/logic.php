<?php
if (($_SERVER['REQUEST_METHOD']) == 'POST' && 
isset($_POST['estil'])){

    $estil= $_POST['estil'];

    switch ($estil){
        case 'rock':
            echo"<p><strong>Missatge:</strong>El rock es top</p>";
            break;
        
        case 'pop':
            echo"<p><strong>Missatge:</strong>Les cançons de pop son increibles</p>";
            break;
        
        case 'flamenco':
            echo"<p><strong>Missatge:</strong>El flamenco es molt español</p>";
            break;
        
        default:
            echo"<p>Si us plau, tria un estil valid</p>";
            break;
    }
}






?>