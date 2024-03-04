<?php
session_start();

// Vérification de l'authentification de l'utilisateur
include_once "../includes/session_manager.php";
redirect_if_not_logged_in("/login.php");

// Inclusion des fonctions communes
include_once "../includes/functions.php";

// Exemple de données factices pour la démonstration
$stats = [
    'nombre_utilisateurs' => 150,
    'nombre_clients' => 250,
    'revenu_mensuel' => 75000, // en euros
    'commandes_en_attente' => 15,
    'ventes_du_jour' => 7500, // en euros
    'utilisateurs_actifs' => 120,
    'clients_nouveaux' => 10
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!-- Utilisation de Bootstrap pour l'amélioration de l'interface -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css"> <!-- Feuille de style personnalisée -->
</head>
<body>
    <?php include_once "../includes/header.php"; ?> <!-- Inclusion de l'en-tête commune -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Statistiques</h5>
                    </div>
                    <div class="card-body">
                        <div class="statistics">
                            <?php foreach ($stats as $label => $value): ?>
                                <div class="statistic">
                                    <span class="label"><?php echo format_label($label); ?>:</span>
                                    <span class="value"><?php echo format_value($value, $label); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Actions rapides</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="gestion_utilisateurs.php">Gérer les utilisateurs</a></li>
                            <li class="list-group-item"><a href="gestion_clients.php">Gérer les clients</a></li>
                            <li class="list-group-item"><a href="rapports.php">Rapports</a></li>
                            <li class="list-group-item"><a href="parametres.php">Paramètres</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "../includes/footer.php"; ?> <!-- Inclusion du pied de page commune -->

    <!-- Intégration du script Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
