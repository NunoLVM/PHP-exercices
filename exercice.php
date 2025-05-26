<h3>Exercices - Variables PHP</h3>

<?php

// Exercice 1
$ville = "Paris";
echo "<p>" . strtoupper($ville) . "</p>";


// Exercice 2
$prenom = "Jean";
$nom = "Dupont";
echo "<p>$prenom $nom</p>";

// Exercice 3
$score = 10;
echo "<p>$score</p>";
$score = 15;
echo "<p>$score</p>";


// Exercice 4
$a = 8;
$b = 4;
$total = $a + $b;
echo "<p>Le total est: $total</p>";


// Exercice 5 (var_dump)
$texte = "alo alo";
$entier = 10;
$decimal = 0.33;
$vraiOuFaux = true;

echo "<p>";
var_dump($texte);
echo "<br>";
var_dump($entier);
echo "<br>";
var_dump($decimal);
echo "<br>";
var_dump($vraiOuFaux);
echo "</p>";


// Exercice 6 (moyenne)
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$somme = $note_maths + $note_francais + $note_histoire_geo;
$moyenne = $somme / 3;
echo "<p>La moyenne est de $moyenne</p>";


// Exercice 7 (TVA)
echo "<div style='border: 1px solid #ccc; padding: 10px; max-width: 320px; margin-top: 20px;'>";

$prix_ht = 50;
$tva = 20;
$montant_tva = $prix_ht * $tva / 100;
$prix_ttc = $prix_ht + $montant_tva;

echo "<p>Prix HT : $prix_ht €</p>";
echo "<p>TVA (20%) : $montant_tva €</p>";
echo "<p style='border-top: 1px solid #999; width: 40%; margin: 10px 0; padding: 0;'></p>";
echo "<p><strong>Prix TTC : $prix_ttc €</strong></p>";

echo "</div>";

?>


