<?php
// Je démarre une session et je conserve les données des visites
session_start();

// j'incrémente de 1
$_SESSION['nbVisites']++;
$nbVisites = $_SESSION['nbVisites'];
// Déclare une variable pour le message
$message = "";


// Je déclare puis je vérifie si la variable de session 'nbVisites' existe déjà
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
} 
 
// Je vérifie si mon bouton de reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur
    $_SESSION['nbVisites'] = 0;
}



// Vérifie si le nombre de visites est de 2
if ($nbVisites == 2) {
    $message = "Félicitations, vous avez visité le site 2 fois!";
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
                <?php echo $message; ?>
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
session_start() : Démarre une session ou reprend une session existante, ce qui permet de stocker des données accessibles entre plusieurs chargements de pages.

$_SESSION['nbVisites'] : Utilise une variable de session pour garder le nombre de visites.

isset($_SESSION['nbVisites']) : Vérifie si la variable de session existe déjà. Si oui, elle est incrémentée. Sinon, elle est initialisée à 1.

$_POST['reset'] : Vérifie si le bouton de réinitialisation a été cliqué. Si c'est le cas, le compteur est réinitialisé à 0. 


-->