<?php
$numero_aleatorio=2;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adivina cualquier cosa</title>
  </head>
  <body>
    <h1>Adivina cualquier cosa</h1>
    <div>
      <form action="index.php" method="post">
        <input type="text" name="numero" value="">
        <input type="submit" name="" value="Enviar">
      </form>
      <?php
      if ( isset($_POST['numero']) ) {
        echo "<h3>Has enviado algo: " . $_POST['numero']. "</h3>";
        if ($numero_aleatorio == $_POST['numero']) {
          echo "<h1>Has ganado!!!</h1>";
        }
      } else {
        echo "Bienvenido al juego!";
      }
      ?>
    </div>
  </body>
</html>
