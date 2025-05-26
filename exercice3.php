<h3>Exercice départements - Boucles & Tableaux PHP</h3>

<?php

// Crée une liste de nombres de 0 à 999
$codes = range(0, 999);

// Nombre de codes postaux par colonne
$chunkSize = 50;

// Divise la liste en groupes de 50 éléments
$chunks = array_chunk($codes, $chunkSize);

// Ouvre un conteneur avec affichage en ligne (flexbox)
echo '<div style="display: flex; gap: 20px;">';  

// Pour chaque groupe (colonne) dans la liste divisée
foreach ($chunks as $chunk) {

    // Ouvre une div pour chaque colonne avec une police monospace
    echo '<div style="font-family: monospace;">';  

    // Pour chaque code dans la colonne
    foreach ($chunk as $code) {

        // Crée le code postal en ajoutant "40" + le code avec 3 chiffres (ex: 004)
        $postal = "40" . str_pad($code, 3, "0", STR_PAD_LEFT);

        // Affiche le code postal suivi d’un saut de ligne HTML
        echo $postal . "<br>";
    }
    // Ferme la div de la colonne
    echo '</div>';
}
// Ferme le conteneur flexbox
echo '</div>';
?>
