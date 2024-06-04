

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rééponse Job04</title>
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
        .back_case {
            padding: 1rem;
        }
        .back {
            background: #f0f0f0;
            color: #000;
            text-decoration: none;
            padding: 0.5rem;
            border: 1px solid #ccc;
        }
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        th {
            padding: 0.5rem 2rem;
            background: black;
            color: white;
        }
        td {
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <div class="center">
        <div class="container">
        <?php
            // Démarrer le tableau HTML
            echo "<table border='1'>";
            echo "<tr><th>Argument</th><th>Valeur</th></tr>";

            // Parcourir chaque argument dans $_POST et afficher dans une ligne du tableau
            foreach ($_POST as $argument => $valeur) {
                echo "<tr><td>" . htmlspecialchars($argument) . "</td><td>" . htmlspecialchars($valeur) . "</td></tr>";
            }

            // Fermer le tableau HTML
            echo "</table>";
        ?>
        </div>
        <div class="back_case">
            <a class="back" href="./index.php">Retour</a>
        </div>
    </div>
</body>
</html>