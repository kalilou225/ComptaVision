<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liasse Fiscale - Compta Vision</title>
  <!-- Liens vers les fichiers Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Styles spécifiques pour la mise en page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }
    .navbar-top {
      background-color: #6c757d !important;
    }
    .navbar-brand {
      color: #fff !important;
      font-weight: bold;
    }
    .module {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .module:hover {
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }
    .module-title {
      color: #343a40;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .module-text {
      color: #6c757d;
      font-size: 18px;
      margin-bottom: 30px;
    }
    .module-btn {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
      transition: background-color 0.3s ease;
    }
    .module-btn:hover {
      background-color: #495057;
      border-color: #495057;
    }
  </style>
</head>
<body>

  <!-- Menu supérieur fixe -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
    <div class="container">
      <a class="navbar-brand" href="#">Compta Vision</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Utilisateur</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <div class="module p-4">
          <h2 class="text-center module-title">Génération de la liasse fiscale</h2>
          <p class="text-center module-text">Utilisez notre outil convivial pour générer rapidement et précisément la liasse fiscale conforme au système comptable OHADA.</p>
          <div class="text-center">
            <a href="liasse_fiscale/formulaire.php" class="btn btn-primary module-btn">Accéder au formulaire</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="module p-4">
          <h2 class="text-center module-title">Consultation des résultats</h2>
          <p class="text-center module-text">Consultez les résultats de vos liasses fiscales précédentes. Visualisez-les en ligne ou téléchargez-les au format PDF pour une utilisation ultérieure.</p>
          <div class="text-center">
            <a href="liasse_fiscale/resultat.php" class="btn btn-primary module-btn">Voir les résultats</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="module p-4">
          <h2 class="text-center module-title">Importation de balance</h2>
          <p class="text-center module-text">Importez vos balances comptables directement dans notre système pour une analyse plus approfondie et une génération plus précise de la liasse fiscale.</p>
          <div class="text-center">
            <a href="importation_balance/index.php" class="btn btn-primary module-btn">Commencer l'importation</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="module p-4">
          <h2 class="text-center module-title">Calculateur d'états financiers</h2>
          <p class="text-center module-text">Utilisez notre calculateur d'états financiers pour estimer vos états financiers avant de les générer officiellement.</p>
          <div class="text-center">
            <a href="calculateur/index.php" class="btn btn-primary module-btn">Accéder au calculateur</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap pour fonctionnalités avancées -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
