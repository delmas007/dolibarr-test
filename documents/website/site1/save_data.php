<?php
// Connexion à la base de données (à adapter selon vos paramètres)
$pdo = new PDO('mysql:host=localhost;dbname=dolibarr', 'root', '');

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des valeurs soumises
    $nom = $_POST['nom'];
    $name_alias = $_POST['name_alias'];
    // Récupérez les autres valeurs soumises de la même manière pour chaque champ

    // Préparation de la requête SQL pour l'insertion des données dans la table llx_societe
    $sql = "INSERT INTO llx_module1_obj (nom, name_alias) VALUES (?, ?)";
    // Modifiez cette requête en fonction des autres champs que vous avez ajoutés au formulaire

    // Exécution de la requête préparée
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $name_alias]);
    // Exécutez cette requête pour chaque champ supplémentaire que vous avez ajouté au formulaire

    // Redirection vers une page de confirmation ou autre
    header('Location: confirmation.php');
    exit();
} else {
    // Si la méthode de requête n'est pas POST, redirigez l'utilisateur vers le formulaire
    header('Location: formulaire.html');
    exit();
}
?>