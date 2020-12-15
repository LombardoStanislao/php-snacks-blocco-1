<!-- Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age) == true) {

    echo "Accesso riuscito";

  } else {

    echo "Accesso negato";
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Snack 2</title>
  </head>
  <body>

  </body>
</html>
