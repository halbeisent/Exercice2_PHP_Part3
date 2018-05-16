<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 2 Partie 3 PHP</title>
  </head>
  <body>
  <?php
  // Je remplis les variables $firstNumber et $secondNumber avant le calcul
  $firstNumber = 0;
  $secondNumber = 99;
  while ($firstNumber < 20) { //Tant que la valeur de $firstNumber est inférieure à 20,
    echo $firstNumber*$secondNumber.'<br />'; //On affiche le résultat du calcul,
    $firstNumber++; //Puis on incrémente la valeur de $firstNumber
  }
  ?>
  </body>
</html>
