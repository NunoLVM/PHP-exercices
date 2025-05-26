<h3>Exercices - Conditions PHP</h3>

<?php

$age = 46;

if($age >=18) {
    echo "Tu es majeur";
} else  { 
    echo "Tu es mineur";
    }



$note = 15;

if($note < 10) { 
    echo "<p>Insuffisant</p>";

} elseif($note <= 10 && $note >= 13) {
    echo "<p>Passable</p>";
} elseif($note <= 14 && $note >= 16) {
    echo "<p>Bien</p>";
} else 
    echo "<p>Excellent</p>";


$agee = 17;
$abonne = true;

if($agee >= 18 && $abonne == true) {
    echo "<p> Accès autorisé</p>"; 
} else { 
    echo "<p>Accès refusé</p>";
}


$budget = 1553.89;
$achats = 1554.76;

if($budget >= $achats) {
    echo "<p>Budget suffisant</p>";
} else {
    echo "<p>Budget insuffisant</p>";
}



?>