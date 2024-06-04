

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="container">
        <?php
            // Compter le nombre d'arguments dans $_POST
            $nombreArguments = count($_POST);

            // Afficher le nombre d'arguments
            echo "Nombre d'arguments POST : " . $nombreArguments;
        ?>
        </div>
    </div>
</body>
</html>