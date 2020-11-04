<?php

$matches = [
  [
    "casa" => "Virus Bologna",
    "ospite" => "Olimpia Milano",
    "punteggio_casa" => 61,
    "punteggio_ospite" => 58,
  ],
  [
    "casa" => "Reyer Venezia Mestre",
    "ospite" => "Cantù",
    "punteggio_casa" => 56,
    "punteggio_ospite" => 60,
  ],
  [
    "casa" => "Guerino Vanoli Basket",
    "ospite" => "Victoria Libertas",
    "punteggio_casa" =>50,
    "punteggio_ospite" =>54,
  ],
  [
    "casa" => "Aquila Basket Trento",
    "ospite" => "New Basket Brindisi",
    "punteggio_casa" => 54,
    "punteggio_ospite" => 58,
  ],
];
  ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partite Basket</title>
  </head>
  <body>

  <ul>
    <?php foreach ($matches as $partite => $match): ?>
      <li><?php echo $match["casa"];?> - <?php echo $match["ospite"];?> | <?php echo $match["punteggio_casa"];?> - <?php echo $match["punteggio_ospite"];?></li>
    <?php endforeach; ?>
  </ul>
  </body>
</html>
