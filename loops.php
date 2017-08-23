<?php

$exemple = rand(0, 100);

echo $exemple;
echo '<br />';

// exo 1
// Créer un tableau nommé $data
// ajoutez y 100 valeurs aléatoires comprises entre 0 et 10
echo '<br />';
$data = [];

for($i = 0; $i < 100; $i++){
$data[$i] = rand(0, 10);
echo "$i : $data[$i]";
echo '<br />';
}

// exo 2
// Créer un tableau nommé $words qui contient 50 mots différents
// Réinitialiser un tableau vide nommé $data
// ajoutez-y 100 tableaux ayant la structure suivante :
// - une clé "word" contenant un des 50 mots du tableau $words sélectionné au hasard
// - une clé "count" contenant une valeur aléatoire comprises entre 0 et 10
$words = ["aeris", "lucrecia", "clad", "ellone", "squall", "linoa", "mylene", "cid",
"selphie", "zell", "caith", "yuna", "barett", "grenat", "bibi", "truc", "bidule",
"final", "fantasy", "advent", "children", "tifa", "alea", "jacta", "est", "phone",
"atom", "tasse", "the", "cafe", "cahier", "casque", "montre", "ecran", "ordi",
"clavier", "feuille", "stylo", "ventilateur", "siege", "tableau", "telecommande",
"armoire", "vitre", "lampe", "sac", "escalier", "fauteuil", "mug", "prise" ];
