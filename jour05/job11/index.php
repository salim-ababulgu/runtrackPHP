<?php
// Connexion à la base de données en une seule ligne
$pdo = new PDO('mysql:host=localhost;dbname=jour05;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// Requête pour récupérer les données des colonnes spécifiques de la table 'etudiant'
$sql = 'SELECT nom, id_etage, capacite FROM salle ORDER BY capacite DESC'; //capacité décroissante
$stmt = $pdo->query($sql);

// Récupérer les noms des colonnes
$columnNames = array();
for ($i = 0; $i < $stmt->columnCount(); $i++) {
    $columnMeta = $stmt->getColumnMeta($i);
    $columnNames[] = $columnMeta['name'];
}

// Affichage des résultats dans un tableau HTML avec des classes CSS
echo '<style>
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
    gap: 1rem;
}
.container {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
}
.table {
    width: 100%;
    border-collapse: collapse;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.thead-dark {
    background-color: #343a40;
    color: white;
}

.column-header {
    padding: 8px;
    text-align: left;
}

.table-row {
    border-bottom: 1px solid #ddd;
}

.table-data {
    padding: 8px;
    text-align: left;
}
</style>';

echo '<div class="center">';
echo '<div class="container">';

echo '<table class="table table-striped" border="1">';
echo '<thead class="thead-dark"><tr>';
foreach ($columnNames as $columnName) {
    echo '<th class="column-header">' . htmlspecialchars($columnName) . '</th>';
}
echo '</tr></thead>';

echo '<tbody>';
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr class="table-row">';
    foreach ($row as $data) {
        echo '<td class="table-data">' . htmlspecialchars($data) . '</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

echo '</div>';
echo '</div>';
?>
