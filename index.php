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
// Tant que la valeur de $firstNumber est inférieure à 20,
  while ($firstNumber < 20) { ?>
    <!-- On affiche le résultat du calcul, -->
    <p><?php echo $firstNumber*$secondNumber;?></p>
    <?php $firstNumber++; //Puis on incrémente la valeur de $firstNumber
  }
  ?>
  </body>
</html>
