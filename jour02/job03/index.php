<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job03</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <div class="center">
        <h1>Job 03</h1>
        <p> - Développez un algorithme qui affiche le nombre d’arguments $_POST.</p>
        <br>
        <br>
        <div class="container">
            <form action="valeur.php" method="POST">
                <label for="nom">Argument 1 :</label>
                    <br>
                <input type="text" name="nom">
                    <br>
                    <br>
                <label for="prenom">Argument 2 :</label>
                    <br>
                <input type="text" name="prenom">
                    <br>
                    <br>
                <input class="btn" type="submit" value="Compter mes arguments">
            </form>
        </div>
    </div>
</body>
</html>
