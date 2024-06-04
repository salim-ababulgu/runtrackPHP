<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de Texte</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte:</label>
        <input type="text" id="str" name="str" required>
        <label for="transformation">Transformation:</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Transformer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];

        function gras($str) {
            return preg_replace('/\b([A-Z][a-z]*)\b/', '<b>$1</b>', $str);
        }

        function cesar($str, $shift = 2) {
            $result = '';
            $shift = $shift % 26;
            for ($i = 0; $i < strlen($str); $i++) {
                $char = ord($str[$i]);
                if ($char >= 65 && $char <= 90) {
                    $result .= chr(($char - 65 + $shift) % 26 + 65);
                } elseif ($char >= 97 && $char <= 122) {
                    $result .= chr(($char - 97 + $shift) % 26 + 97);
                } else {
                    $result .= $str[$i];
                }
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        switch ($transformation) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
        }
    }
    ?>
</body>
</html>
