<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job01</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .center {
            display: flex;
            align-items: center; 
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }
        .container {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 1rem;
        }
        .btn {
            padding: 0.5rem;
            background: black;
            color: white;
        }
        .btn:hover {
            background: #ccc;
            color: black;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>Job 01</h1>
        <p> - Développez un algorithme qui affiche le nombre d’arguments $_GET.</p>
        <br>
        <br>
        <div class="container">
            <form action="valeur.php" method="get">
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

