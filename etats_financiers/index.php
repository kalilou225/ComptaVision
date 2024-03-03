<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>États Financiers - Compta Vision</title>
  <!-- Liens vers les fichiers Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <!-- Liens vers les fichiers Font Awesome CDN pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .navbar-top {
      background-color: #6c757d;
    }
    .navbar-brand {
      color: #fff;
      font-size: 1.5rem;
    }
    .container {
      margin-top: 20px;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      background-color: #f5f5f5;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }
    .card-title {
      font-size: 1.2rem;
      color: #563d7c; /* Couleur violette */
    }
    .btn {
      border-radius: 25px;
      font-weight: bold;
      background-color: #563d7c; /* Couleur violette */
      border-color: #563d7c; /* Couleur violette */
    }
    .btn:hover {
      background-color: #684a92; /* Couleur violette légèrement plus foncée au survol */
      border-color: #684a92; /* Couleur violette légèrement plus foncée au survol */
    }
  </style>
</head>
<body style="background-color: #e9ecef;"> <!-- Fond gris -->

  <!-- Menu supérieur fixe -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
    <div class="container">
      <a class="navbar-brand" href="#">Compta Vision</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <span class="nav-link">Utilisateur</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h2 class="mt-4 mb-4 text-center">États Financiers</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Bilan -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Bilan</h5>
          <p class="card-text">Consultez et générez des bilans financiers détaillés pour évaluer la santé financière de votre entreprise.</p>
          <a href="balance.php" class="btn btn-primary stretched-link">Accéder au bilan</a>
        </div>
      </div>
      <!-- Compte de Résultat -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Compte de Résultat</h5>
          <p class="card-text">Visualisez et créez des comptes de résultat pour analyser les performances de votre entreprise sur une période donnée.</p>
          <a href="compte_resultat.php" class="btn btn-primary stretched-link">Accéder au compte de résultat</a>
        </div>
      </div>
      <!-- Autres États Financiers -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Autres États Financiers</h5>
          <p class="card-text">Explorez une variété d'autres états financiers tels que le tableau des flux de trésorerie et le tableau des variations des capitaux propres.</p>
          <a href="autres_etats.php" class="btn btn-primary stretched-link">Accéder aux autres états financiers</a>
        </div>
      </div>
      <!-- Rapports Mensuels -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Rapports Mensuels</h5>
          <p class="card-text">Consultez les rapports mensuels pour une analyse détaillée de la performance financière de votre entreprise au fil du temps.</p>
          <a href="rapports_mensuels.php" class="btn btn-primary stretched-link">Voir les rapports mensuels</a>
        </div>
      </div>
      <!-- Prévisions Financières -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Prévisions Financières</h5>
          <p class="card-text">Élaborez des prévisions financières pour planifier l'avenir financier de votre entreprise et prendre des décisions éclairées.</p>
          <a href="previsions_financieres.php" class="btn btn-primary stretched-link">Voir les prévisions financières</a>
        </div>
      </div>
      <!-- Analyse des Ratios -->
      <div class="col">
        <div class="card p-4">
          <h5 class="card-title mb-3">Analyse des Ratios</h5>
          <p class="card-text">Effectuez une analyse approfondie des ratios financiers pour évaluer la performance et la santé financière de votre entreprise.</p>
          <a href="analyse_ratios.php" class="btn btn-primary stretched-link">Voir l'analyse des ratios</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap pour fonctionnalités avancées -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
