<?php
    $ville = "Paris";
    echo "<p>" . strtoupper($ville) . "</p>";

?>

<p><?php
    $prenom = "Jean";
    $nom = "Dupont";

    echo $prenom . " " . $nom;

?></p>

<?php 
    $score = 10; 
    echo "<p>" . $score . "</p>"; 
    
    $score = 15; 
    echo "<p>" . $score . "</p>";
?>

<p>
<?php
    $a = 8;
    $b = 4;
    $total = $a + $b;
    echo "Le total est: " . $total;
?>
</p>

<p>
<?php
    $texte = "alo alo";
    $entier = 10;
    $decimal = 0.33;
    $vraiOuFaux = true;

    var_dump($texte);
    echo "<br>";
    var_dump($entier);
    echo "<br>";
    var_dump($decimal);
    echo "<br>";
    var_dump($vraiOuFaux);
?>
</p>   

<?php
   $note_maths = 15;
   $note_francais = 12;
   $note_histoire_geo = 9;
   $moyenne = 0;
   echo 'La moyenne est de '.$moyenne.' / 20.';
?>
  
