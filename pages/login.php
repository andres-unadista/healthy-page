
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALUD</title>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/login.css">
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
        <li><a href="/pages/info.php">Nosotros</a></li>
        <li><a href="/pages/login.php">Iniciar sesión</a></li>
      </ul>
    </nav>
    <div class="header__content">
      <h1>Iniciar sesión</h1>
      <form method="POST" action="../controllers/userController.php?action=login" class="form-login">
        <label for="email">Usuario</label>
        <input type="text" name="email" id="email" required>
        <label for="pass">Contraseña</label>
        <input type="password" name="password" id="password" value="" required>
        <div class="form-button">
          <button type="submit">Iniciar</button>
          <a href="/pages/register.php" id="register">Registrarse</a>
        </div>
      </form>
    </div>
  </header>

</body>

</html>