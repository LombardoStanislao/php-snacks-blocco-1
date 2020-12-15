<!-- PHP Snack 1:
Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite

L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
[squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
ad esempio:
Olimpia Milano - Cantù | 55 - 60
-->
<?php

  // Creo un array di matches

    $matches = [
      [
        "squadra di casa" => "Universo Treviso",
        "squadra ospite" => "Cremona",
        "punti squadra di casa" => "68",
        "punti squadra ospite" => "75"
      ],
      [
        "squadra di casa" => "Cantù",
        "squadra ospite" => "Trieste",
        "punti squadra di casa" => "82",
        "punti squadra ospite" => "79"
      ],
      [
        "squadra di casa" => "Reggiana",
        "squadra ospite" => "Fortitudo Bologna",
        "punti squadra di casa" => "71",
        "punti squadra ospite" => "83"
      ],
      [
        "squadra di casa" => "Brindisi",
        "squadra ospite" => "VL Pesaro",
        "punti squadra di casa" => "68",
        "punti squadra ospite" => "69"
      ],
      [
        "squadra di casa" => "Olimpia Milano",
        "squadra ospite" => "Dinamo Sassari",
        "punti squadra di casa" => "85",
        "punti squadra ospite" => "68"
      ],
      [
        "squadra di casa" => "Virtus Bologna",
        "squadra ospite" => "Brescia",
        "punti squadra di casa" => "77",
        "punti squadra ospite" => "70"
      ],
    ];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP | Snack-1</title>
  </head>
  <body>

    <h3>
      <?php

          for ($i=0; $i < count($matches) ; $i++) {

            echo "<h3>" . $matches[$i]["squadra di casa"] . " - " . ($matches[$i]["squadra ospite"]) . " | " . ($matches[$i]["punti squadra di casa"]) . " - " . ($matches[$i]["punti squadra ospite"]) . "</h3>";
          }


       ?>
    </h3>

  </body>
</html>
