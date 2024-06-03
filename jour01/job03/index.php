<?php
// Déclaration des variables
$integer = 42;
$float = 3.14;
$string = "LaPlateforme";
$boolean = true;
$null = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
    <style>
        body {
            background: rgb(255,255,255);
            background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(2,0,36,1) 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .title {
            text-align: center;
        }
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: rgba(2,0,36,1);
            color: #fff;
            border: 2px #ccc solid
        }
    </style>
</head>
<body>
    <h1 class="title">Mon tableaux en php</h1>
    <div class="center">
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
                    <td><?php echo $integer; ?></td>
                </tr>
                <tr>
                    <td>Float</td>
                    <td>$float</td>
                    <td><?php echo $float; ?></td>
                </tr>
                <tr>
                    <td>String</td>
                    <td>$string</td>
                    <td><?php echo $string; ?></td>
                </tr>
                <tr>
                    <td>Boolean</td>
                    <td>$boolean</td>
                    <td><?php echo $boolean ? 'true' : 'false'; ?></td>
                </tr>
                <tr>
                    <td>Null</td>
                    <td>$null</td>
                    <td><?php echo $null === null ? 'null' : $null; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
