<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projeto Iniciando php</title>
  </head>
  <body>
    <h1>Servidor PHP</h1>
    <?php
      $hoje = date('d/m/Y');
      echo $hoje;

      echo "<br /> 5 + 5 é = 10";

      phpinfo();
    ?>
  </body>
</html>
