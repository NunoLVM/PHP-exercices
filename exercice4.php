<h3>Boucles & Tableaux PHP</h3>

<?php

for ($i = 1; $i <=10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
    
}

echo '<br>';


$prenoms = ['Nuno', 'Angélique', 'Sébastien', 'Nina', 'Adrien'];

foreach($prenoms as $prenom) {

    echo $prenom . ": est présent(e).<br>";
}

echo '<br>';

$equipe = [
   'Nuno' => 'PHP',
   'Angélique' => 'JavaScript',
   'Sébastien' => 'PHP',
   'Nina' => 'Python',
   'Adrien' => 'PHP',
   'Alvyn' => 'PHP',
   'Ilona' => 'JavaScript',
   'Jean-François' => 'PHP',
   'Alan' => 'JavaScript',
   'Guillaume' => 'PHP'
];

foreach($equipe as $nom => $specialite) {
    if($specialite == "PHP")
    echo $nom . " " . "est développeur PHP.<br>";
}

echo '<br>';

$pays = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
];

foreach($pays as $ville => $capital) {
    echo $ville . ":" . $capital . "<br>";
}

echo '<br>';

$numbers = [];

for($i = 0; $i < 10; $i++) {
    $numbers[] = rand(0, 100);
}

$moinsDe50 = [];
$plusDe50 = [];

foreach($numbers as $number) {
    if ($number < 50) {
        $moinsDe50[] = $number;
    } else {
        $plusDe50[] = $number;

    }
        
}

echo "Nombres moins de 50 : " . implode(", ", $moinsDe50) . "<br>";
echo "Nombres 50 ou plus : " . implode(", ", $plusDe50) . "<br>";
 

echo '<br>';

$pays_population = array(
  'France' => 67595000,
  'Suede' => 9998000,
  'Suisse' => 8417000,
  'Kosovo' => 1820631,
  'Malte' => 434403,
  'Mexique' => 122273500,
  'Allemagne' => 82800000,
);

echo "<p style='font-weight: bold; font-size: 18px; color: #333;'> Nombre de pays dans le tableau : " 
. count($pays_population) . "</p>";

echo '<br>';

foreach ($pays_population as $pays => $population) {
    echo $pays . " a une population de " . $population . " habitants.<br>";
}


?>



