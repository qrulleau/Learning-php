<!-- Cours de Grafikart
https://grafikart.fr/
https://www.youtube.com/watch?v=cWoq5znh0vw&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD -->


<?php 
#introduction au variable , concaténation et difference simple / double quotes
$prenom = 'Mard'; 
$nom = 'Doe';
$note1 = '10';
$note2 = '20';

echo 'Bonjour '.$prenom.' '.$nom.' '.'vous avez eu '.($note1 + $note2)/2 ."\n" ;

#introduction au tableau

//simple tableau
$note = [10,20,'tete'];
echo $note[0]."\n";

//double tableau
$test = [['test','bonjour'],[3, 12, 10]];
echo $test[1][0]."\n";

//associé une clé avec une valeur
$eleve = [
  'nom' => 'Doe',
  'prenom' => 'Marc',
  'notes' => [10,15,2]
];
echo $eleve['prenom'] . ' ' . $eleve['nom']."\n";

//réassigné une valeur
$eleve['prenom'] = 'Jean';
$eleve['notes'][1] = '10';
echo 'mon nouveau prenom est :'. $eleve['prenom'] . 'et ma nouvelle note est ' . $eleve['notes'] . "\n";

// plusieurs tableau avec des valeurs dans un tableau

$classe = [
  [
    'nom' => 'Doe',
    'prenom' => 'jean',
    'notes' => [12,15,17]
  ],
  [
    'nom' => 'Doe',
    'prenom' => 'Jane',
    'notes' => [45,4,8]
  ]
];
echo $classe[1]['notes'][1]."\n";

// les conditions / faire intéragir l'utilisateur

// if 
$graduate = readline('Entrez votre note :');

if ($graduate >= 10){
  if (note == 10) {
    echo 'vous avez juste la moyenne';
  } else {
    echo 'vous avez au dessus de la moyenne';
  }
} else {
  echo 'dommage vous n\'avez pas la moyenne';
}

// elseif / typé la réponse / ===
$graduate = (int)readline('Entrez votre note :');

if ($graduate >= 10){
    echo 'vous avez la moyenne';
  } elseif (note === 10){
    echo 'vous avez juste la moyenne';
  } else {
  echo 'dommage vous n\'avez pas la moyenne';
}

// switch 
$action = (int)readline('Entre votre action : (1: attaquer, 2: défendre, 3: passer mon tour');

switch($action){
  case 1:
    echo 'j\'attaque';
    break;
  case 2:
    echo 'je defends';
    break;
  case 3:
    echo 'passe mon tour';
    break;
  default:
    echo 'commande inconnu';
    break;
}

// while
$chiffre = null;

while ($chiffre !== 10){
  $chiffre = (int)readline('entrez un nombre :');
}

echo 'bravo vous avez gagné';

// for
$chiffre = null;

for ($i = 0; $i < 10;$i++){
  echo $i . "\n";
}

// foreach
$notes = [10, 15, 16];
$eleves = [
  'CM2' => 'Jean',
  'CM1' => 'Marc'
];

foreach($notes as $note){
  echo $note . "\n";
}
foreach ($eleves as $classe => $eleve) {
  echo "$eleve est dans la classe $classe \n";
}

$memos = [];
$action = "";

while ($action !== 'fin'){
  $action= (string)readline('veuillez écrire une note : ');
  $memos[]=(string)$action;
  // if ($action == 'fin' ){
  //   echo $memos."\n";
  // }
};

foreach ($memos as $memo) {
  echo "-$memo \n";
}
