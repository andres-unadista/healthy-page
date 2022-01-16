<?php
require_once '../models/db.php';
require_once '../models/class_school.php';

$objClass = new class_school();
$listClasses = $objClass->list_classes();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALUD</title>
  <link rel="stylesheet" href="/css/main.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="main.js" defer></script>
  <style>
    table td,
    th {
      padding: 1rem;
      text-transform: uppercase;
    }

    .header__content {
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="/index.php">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="/pages/login.php">Iniciar sesión</a></li>
      </ul>
    </nav>
    <div class="header__content">
      <h1>Listado de clases</h1>
      <h2>Detalle de las clases de la empresa S.A.</h2>
    </div>
  </header>

  <main>
    <section class="main__gymnastic">
      <div class="main__gymnastic-desc">
        <table class="table" border="1">
          <thead>
            <tr>
              <th>N°</th>
              <th>Clase</th>
              <th>Horario</th>
              <th>Cantidad de horas</th>
              <th>Deporte</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listClasses as $key => $class): ?>
              <tr>
                <td scope="row"><?=$class['id']?></td>
                <td><?=$class['name']?></td>
                <td><?=$class['schedule']?></td>
                <td><?=$class['hours']?></td>
                <td><?=$class['name_sport']?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>

      </div>
    </section>

  </main>


</body>

</html>