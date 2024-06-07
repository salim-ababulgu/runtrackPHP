<?php
// Connexion à la base de données en une seule ligne
$pdo = new PDO('mysql:host=localhost;dbname=jour05;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// Requête pour récupérer le nombre total d'étudiants
$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiant";
$stmt = $pdo->query($sql);

// Récupérer les noms des colonnes
$columnNames = $stmt->fetch(PDO::FETCH_ASSOC);

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
echo '<th class="column-header">nb_etudiants</th>'; // Affichage statique de l'en-tête de colonne
echo '</tr></thead>';

echo '<tbody>';
echo '<tr class="table-row">';
foreach ($columnNames as $data) {
    echo '<td class="table-data">' . htmlspecialchars($data) . '</td>';
}
echo '</tr>';
echo '</tbody>';

echo '</table>';

echo '</div>';
echo '</div>';
?>
