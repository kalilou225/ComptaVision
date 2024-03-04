    <?php
    // Inclusion des fichiers nécessaires
    require_once('../includes/session_manager.php');

    // Vérification de l'authentification de l'utilisateur
    session_start();
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: ../tableau_de_bord/deconnexion.php');
        exit;
    }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importation et exportation - ComptaVision</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Importation et exportation</h1>
    <h2>Assistant d'importation de la balance</h2>
    <p><a href="importation_balance/index.php">Accéder à l'assistant d'importation de la balance</a></p>
    <h2>Exportateur de la liasse fiscale</h2>
    <p><a href="exportation_liasse/index.php">Accéder à l'exportateur de la liasse fiscale</a></p>
</body>
</html>
