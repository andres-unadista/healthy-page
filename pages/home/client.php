<?php
session_start();
$role = (int) $_SESSION[session_id()]['user']['role'];
?>
<?php if (isset($_SESSION[session_id()]['user']) &&  $role === 2) :  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
  </head>

  <body>
    <header>
      <h1>Cliente registrado: <?= $_SESSION[session_id()]['user']['email'] ?></h1>
    </header>
  </body>

  </html>

<?php else : ?>

  <script>
    alert("¡Permiso denegado!")
    window.location = "/pages/login.php";
  </script>

<?php endif ?>