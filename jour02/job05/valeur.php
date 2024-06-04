<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs username et password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les credentials
    if ($username == "John" && $password == "Rambo") {
        echo "ce n'est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }
} else {
    // Afficher le formulaire si la méthode de requête n'est pas POST
    echo '<form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>';
}
?>
