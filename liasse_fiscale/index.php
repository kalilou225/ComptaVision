<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liasse Fiscale - Compta Vision</title>
  <!-- Liens vers les fichiers Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Ajout de styles spécifiques pour la page */
    .module {
      animation: fadeInUp 0.5s ease;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
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
    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
      <!-- Proposition de génération de la liasse fiscale -->
      <div class="col">
        <div class="module p-4">
          <h2 class="text-center mb-3 module-title">Génération de la liasse fiscale</h2>
          <p class="text-center module-text">Utilisez notre outil convivial pour générer rapidement et précisément la liasse fiscale conforme au système comptable OHADA.</p>
          <div class="text-center">
            <a href="liasse_fiscale/formulaire.php" class="btn btn-primary module-btn">Accéder au formulaire</a>
          </div>
        </div>
      </div>
      <!-- Proposition de consultation des résultats de la liasse fiscale -->
      <div class="col">
        <div class="module p-4">
          <h2 class="text-center mb-3 module-title">Consultation des résultats</h2>
          <p class="text-center module-text">Consultez les résultats de vos liasses fiscales précédentes. Visualisez-les en ligne ou téléchargez-les au format PDF pour une utilisation ultérieure.</p>
          <div class="text-center">
            <a href="liasse_fiscale/resultat.php" class="btn btn-primary module-btn">Voir les résultats</a>
          </div>
        </div>
      </div>
      <!-- Proposition d'aide à la saisie -->
      <div class="col">
        <div class="module p-4">
          <h2 class="text-center mb-3 module-title">Besoin d'aide ?</h2>
          <p class="text-center module-text">Consultez nos guides détaillés pour vous aider dans la saisie des informations nécessaires à la génération de votre liasse fiscale.</p>
          <div class="text-center">
            <a href="#" class="btn btn-primary module-btn">Voir les guides</a>
          </div>
        </div>
      </div>
      <!-- Proposition de support client -->
      <div class="col">
        <div class="module p-4">
          <h2 class="text-center mb-3 module-title">Besoin d'assistance ?</h2>
          <p class="text-center module-text">Notre équipe de support est à votre disposition pour répondre à toutes vos questions et vous assister dans l'utilisation de notre outil.</p>
          <div class="text-center">
            <a href="#" class="btn btn-primary module-btn">Contacter le support</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts Bootstrap pour fonctionnalités avancées -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    