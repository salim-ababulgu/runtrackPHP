<!-- Affichage des nombres compris entre 0 et 1337 + mise en retour à la ligne entre chaque nombre. -->
<!-- Le nombre 42 doit être en gras et souligné. -->
<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<b><u>$i</u></b><br>";
    } elseif (!in_array($i, [26, 37, 88, 1111])) {
        echo $i . "<br>";
    }
}
?>
