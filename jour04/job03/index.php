<?php
// Démarrer une session pour conserver les données entre les visites
session_start();

// Vérifier si le formulaire a été soumis
if (isset($_POST['prenom'])) {
    // Ajouter le prénom dans la variable de session
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Vérifier si le bouton de reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la liste des prénoms
    $_SESSION['prenoms'] = [];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste de Prénoms</title>
</head>
<body>
    <h1>Liste des prénoms</h1>
    <ul>
        <?php
        if (isset($_SESSION['prenoms'])) {
            // Afficher chaque prénom dans la liste
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        }
        ?>
    </ul>
    <form method="post">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
