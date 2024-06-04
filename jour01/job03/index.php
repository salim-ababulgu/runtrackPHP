<?php
// Déclaration des variables
$integer = 42;
$float = 3.14;
$string = "LaPlateforme";
$boolean = true;
$null = null;

// Génération du tableau HTML
echo "
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Integer</td>
            <td>$integer</td>
            <td>$integer</td>
        </tr>
        <tr>
            <td>Float</td>
            <td>$float</td>
            <td>$float</td>
        </tr>
        <tr>
            <td>String</td>
            <td>$string</td>
            <td>$string</td>
        </tr>
        <tr>
            <td>Boolean</td>
            <td>$boolean</td>
            <td>$boolean</td>
        </tr>
        <tr>
            <td>Null</td>
            <td>$null</td>
            <td>$null</td>
        </tr>
    </tbody>
</table>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Redirection entre les pagese</title>
</head>
<body>
    <!-- Ajoutez un bouton pour rediriger vers la page principale -->
    <!-- Bouton pour la page précédente -->
    <a href="./job02/inde.php">Page précédente</a>

    <!-- Bouton pour la page suivante -->
    <a href="../job04/index.php">Page suivante</a>
</body>
</html>
