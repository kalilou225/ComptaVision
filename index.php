<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - Compta Vision</title>
  <!-- Liens vers les fichiers Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }
    .navbar-top {
      background-color: #6c757d;
    }
    .navbar-brand {
      color: #fff;
    }
    .module {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .module:hover {
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }
    .module-title {
      color: #6c757d;
    }
    .module-text {
      color: #333;
    }
    .module-btn {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
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

  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <!-- États financiers -->
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">Import export</h5>
          <p class="text-center module-text">Générez facilement vos états financiers.</p>
          <div class="text-center">
            <a href="import_export/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <!-- Liasse fiscale -->
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">Liasse fiscale</h5>
          <p class="text-center module-text">Description de la liasse fiscale.</p>
          <div class="text-center">
            <a href="liasse_fiscale/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <!-- Tableau de bord -->
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">TÉtats financiers</h5>
          <p class="text-center module-text">Description du tableau de bord.</p>
          <div class="text-center">
            <a href="tableau_bord/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <!-- Autres modules -->
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">Analyseur</h5>
          <p class="text-center module-text">Outil d'analyse et de diagnostic.</p>
          <div class="text-center">
            <a href="analyseur/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">Générateur de liasse</h5>
          <p class="text-center module-text">Outil de génération de liasse fiscale.</p>
          <div class="text-center">
            <a href="generateur_liasse/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="module p-4">
          <h5 class="text-center mb-3 module-title">Calculateur</h5>
          <p class="text-center module-text">Calculateur d'états financiers.</p>
          <div class="text-center">
            <a href="calculateur/index.php" class="btn btn-primary module-btn">Voir plus</a>
          </div>
        </div>
      </div>
      <!-- Ajoutez ici d'autres modules -->
    </div>
  </div>

  <!-- Scripts Bootstrap pour fonctionnalités avancées -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
