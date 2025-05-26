<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des fichiers PHP</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    h1 { color: #333; }
    ul { list-style: none; padding: 0; }
    li { margin: 5px 0; }
    a { text-decoration: none; color: #007BFF; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <h1>Fichiers PHP dans le dossier courant</h1>
  <!-- <ul>
    <?php
      // Liste tous les fichiers PHP du répertoire courant
      $fichiers = glob("*.php");

      if ($fichiers) {
        foreach ($fichiers as $fichier) {
          // Ne pas afficher index.php lui-même
          if ($fichier !== basename(__FILE__)) {
            echo '<li><a href="' . $fichier . '">' . $fichier . '</a></li>';
          }
        }
      } else {
        echo '<li>Aucun fichier PHP trouvé.</li>';
      }
    ?>
  </ul> -->
<ul>
    <?php

    // Pour chaque fichier PHP dans le dossier
    foreach (glob("*.php") as $f) {

      // Ignorer ce fichier (le fichier courant)
      if ($f !== basename(__FILE__)) {

        // Lire le contenu du fichier
        $c = file_get_contents($f);

         // Chercher le texte entre <h3> et </h3>
        preg_match('/<h3>(.*?)<\/h3>/is', $c, $m);

         // Si trouvé, prendre le texte sinon "Pas de titre"
        $t = $m[1] ?? "Pas de titre";
        
        // Afficher le lien + titre
        echo "<li><a href='$f'>$f</a> - " . htmlspecialchars($t) . "</li>";
      }
    }
    ?>
</ul>

</body>

</html>