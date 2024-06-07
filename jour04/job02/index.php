<?php

    // j'incrémente de 1
    $_COOKIE['nbVisites']++;
    $nbVisites = $_COOKIE['nbVisites'];

    // Je déclare puis je vérifie si la variable de COOKIE 'nbVisites' existe déjà
    if (!isset($_COOKIE['nbVisites'])) {
        $_COOKIE['nbVisites'] ++;
    } 

    
    
    // Vérifier si le bouton de reset a été cliqué
    if (isset($_POST['reset'])) {
        // Réinitialiser le cookie
        setcookie('nbVisites');
        $nbVisites = 0;
    }

    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de Visites</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="center">
        <div class="container">
            <!-- J'affiche avec echo -->
            <h4> <?php echo $nbVisites ?> utilisateur, on visitée le site</h4>
            <form class="btn-form" method="post" style="display: flex; justify-content: center;">
                <button class="btn" type="submit" name="reset">Réinitialiser</button>
            </form>
            <!-- Afficahge de message ici -->
        </div>
        
    </div>
</body>
</html>


<!-- 


Explications :
COOKIE_start() : Démarre une COOKIE ou reprend une COOKIE existante, ce qui permet de stocker des données accessibles entre plusieurs chargements de pages.

$_COOKIE['nbVisites'] : Utilise une variable de COOKIE pour garder le nombre de visites.

isset($_COOKIE['nbVisites']) : Vérifie si la variable de COOKIE existe déjà. Si oui, elle est incrémentée. Sinon, elle est initialisée à 1.

$_POST['reset'] : Vérifie si le bouton de réinitialisation a été cliqué. Si c'est le cas, le compteur est réinitialisé à 0. 


-->