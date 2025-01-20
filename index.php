<?php
// Récupère la page demandée depuis l'URL via le paramètre "page", ou utilise "home" par défaut si aucun paramètre n'est fourni.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Définit le chemin vers le fichier correspondant à la page demandée (dans le dossier "pages").
$page_file = "pages/" . $page . ".php";

// Vérifie si le fichier correspondant existe, sinon redirige vers la page d'erreur 404.
if (!file_exists($page_file)) {
  $page = '404'; // Définit la page en tant que "404".
  $page_file = "pages/404.php"; // Chemin vers le fichier de la page 404.
}

// Définition des descriptions uniques pour chaque page, utilisées dans la balise meta description.
$page_descriptions = [
  'home' => 'Bienvenue sur le portfolio de Vincent Corvers, développeur web backend spécialisé dans les solutions robustes et scalables.',
  'projects' => 'Découvrez les projets réalisés par Vincent Corvers, mettant en pratique ses compétences en développement backend, bases de données et DevOps.',
  '404' => 'Erreur 404 : La page que vous recherchez est introuvable. Retournez à l\'accueil pour explorer le portfolio de Vincent Corvers.'
];

// Récupère la description de la page active depuis le tableau des descriptions, ou une valeur par défaut si la page est inconnue.
$meta_description = isset($page_descriptions[$page]) ? $page_descriptions[$page] : 'Portfolio de Vincent Corvers, développeur web backend.';

// Définition des titres uniques pour chaque page, utilisés dans la balise <title>.
$page_titles = [
  'home' => 'Vincent Corvers - Développeur web backend',
  'projects' => 'Vincent Corvers - Mes Réalisations',
  '404' => 'Erreur 404 - Page introuvable'
];

// Récupère le titre de la page active depuis le tableau des titres, ou une valeur par défaut si la page est inconnue.
$page_title = isset($page_titles[$page]) ? $page_titles[$page] : 'Vincent Corvers - Portfolio';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Définition du charset pour supporter les caractères spéciaux -->
  <meta charset="UTF-8" />

  <!-- Balise viewport pour adapter le contenu aux écrans mobiles -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <!-- Balise meta description pour le SEO, personnalisée en fonction de la page active -->
  <meta name="description" content="<?php echo $meta_description; ?>">

  <!-- Inclusion des fichiers CSS pour le style global et celui spécifique aux projets -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/projects.css" />

  <!-- Titre de la page, personnalisé en fonction de la page active -->
  <title><?php echo $page_title; ?></title>
</head>

<body>
  <!-- Inclusion de la navigation (header) depuis un fichier séparé pour une meilleure organisation -->
  <?php include 'includes/header.php'; ?>

  <!-- Inclusion du contenu principal de la page active -->
  <?php include $page_file; ?>

  <!-- Inclusion du pied de page (footer) depuis un fichier séparé -->
  <?php include 'includes/footer.php'; ?>
</body>

</html>