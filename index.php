<?php
// Récupérer la page demandée depuis l'URL, ou définir "home" par défaut
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Définir le chemin vers le fichier correspondant à la page demandée
$page_file = "pages/{$page}.php";

// Vérifier si le fichier existe, sinon afficher une erreur 404
if (!file_exists($page_file)) {
  $page_file = "pages/404.php"; // Crée une page 404 si ce n'est pas encore fait
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/projects.css" />

  <title>Vincent Corvers - Portfolio</title>
</head>

<body>
  <!--Navigation-->
  <?php require 'includes/header.php'; ?>

  <!-- Contenu principal -->
  <?php require $page_file; ?>

  <!--Footer-->
  <?php require 'includes/footer.php'; ?>

</body>

</html>