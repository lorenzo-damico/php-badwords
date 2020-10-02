<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire
la badword passata in GET con tre *. -->

<?php
  $testo = "lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $lunghezzaTesto = strlen($testo);
  $badword = $_GET["badword"];
  $testoCensurato = str_replace($badword, "***", $testo);
  $lunghezzaTestoCensurato = strlen($testoCensurato);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio badwords</title>
  </head>
  <body>
    <p><?php echo $testoCensurato; ?></p>
    <p>Il paragrafo è lungo <?php echo $lunghezzaTestoCensurato; ?> caratteri.</p>
  </body>
</html>
