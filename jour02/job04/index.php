<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job04</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <div class="center">
        <h1>Job 04</h1>
        <p> - Créez un algorithme qui affiche dans un tableau HTML l’ensemble des
arguments $_POST et les valeurs associés.</p>
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

