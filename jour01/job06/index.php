<?php
    for ($i = 0; $i <= 100; $i++) {
        if ($i == 42) {
            // Afficher "La Plateforme_" à la place de 42
            echo "La Plateforme_<br>";
        } elseif ($i >= 0 && $i <= 20) {
            // Ecrire en italique pour les nombres entre 0 et 20
            echo "<i>$i</i><br>";
        } elseif ($i >= 25 && $i <= 50) {
            // Souligner les nombres entre 25 et 50
            echo "<u>$i</u><br>";
        } else {
            // Afficher normalement les autres nombres
            echo $i . "<br>";
        }
    }
?>
