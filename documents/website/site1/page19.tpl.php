<?php // BEGIN PHP
$websitekey=basename(__DIR__); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) {
	$pathdepth = count(explode('/', $_SERVER['SCRIPT_NAME'])) - 2;
	require_once ($pathdepth ? str_repeat('../', $pathdepth) : './').'master.inc.php';
} // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>page12</title>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="title" content="page12" />
<meta name="description" content="" />
<meta name="generator" content="Dolibarr 19.0.1 (https://www.dolibarr.org)" />
<meta name="dolibarr:pageid" content="19" />
<link rel="canonical" href="/page12.php" />
<?php if ($website->use_manifest) { print '<link rel="manifest" href="/manifest.json.php" />'."\n"; } ?>
<!-- Include link to CSS file -->
<link rel="stylesheet" href="/styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include link to JS file -->
<script nonce="b7a8ac40" async src="/javascript.js.php?website=<?php echo $websitekey; ?>"></script>
<!-- Include HTML header from common file -->
<?php if (file_exists(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")) include DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html"; ?>
<!-- Include HTML header from page header block -->

</head>

<body>

<form method="post" action="">
    <!-- Champ caché pour le jeton CSRF -->
    <input type="hidden" name="token" value="<?php echo $_SESSION['newtoken']; ?>">

    <p>
        <label for="nom">Nom de la société :</label>
        <input type="text" id="nom" name="nom" placeholder="Ex : Dolibarr Inc" required>
    </p>
    <p>
        <label for="email">name_alias :</label>
        <input type="text" id="email" name="name_alias" required>
    </p>
    <p>
        <input type="submit" value="Enregistrer">
    </p>
</form>

</body>
<?php
// Démarrez la session pour accéder au jeton CSRF
session_start();

// Connexion à la base de données (à adapter selon vos paramètres)
$pdo = new PDO('mysql:host=localhost;dbname=dolibarr', 'root', '');

// Vérification de la soumission du formulaire et du jeton CSRF
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['newtoken']) {
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

    // Redirection vers une page de confirmation ou autre
    echo '<script>window.location.replace("confirmation.php");</script>';
    exit();
}
?>
<?php

// Requête SQL pour récupérer les données de la table
$query = "SELECT * FROM nom_de_votre_table";
$stmt = $pdo->query($query);

// Vérification des résultats de la requête
if ($stmt) {
    // Affichage des résultats dans une liste HTML
    echo '<ul>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>' . $row['colonne1'] . ' - ' . $row['colonne2'] . '</li>';
        // Ajoutez ici les autres colonnes que vous souhaitez afficher
    }
    echo '</ul>';
} else {
    // Gestion de l'erreur si la requête échoue
    echo "Erreur lors de l'exécution de la requête.";
}
?>

</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "html", 19); dolWebsiteIncrementCounter(2, "page", 19);
// END PHP ?>
