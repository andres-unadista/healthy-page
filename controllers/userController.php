<?php
require_once '../models/db.php';
require_once '../models/user.php';
session_start();

class UserController
{
  function login()
  {
    if ($this->validateData()) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $user = User::getUserByEmail($email);
      if ($user && password_verify($password, $user['password'])) {
        $_SESSION[session_id()]['user'] = $user;
        echo 'Usuario logeado';
        var_dump($_SESSION);
        return;
      }
      echo 'Usuario o contraseña erróneas';
    }
  }
  function register()
  {
    if ($this->validateData()) {
      $user = [];
      $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
      $user['email'] = $_POST['email'];
      $user['password'] = $_POST['password'];
      if ($user['password'] === $confirmPassword) {
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        $responseUser = User::createUser($user);
        if ($responseUser) {
          echo 'Usuario creado!';
          $_SESSION[session_id()]['user'] = $user;
          var_dump($_SESSION);
        } else {
          echo 'Usuario no creado!';
        }
      } else {
        echo 'Datos inválidos!';
        return false;
      }
    }
  }

  function validateData()
  {
    $user = isset($_POST['email']);
    $pass = isset($_POST['password']);

    if (!$user || !$pass) {
      echo 'Datos inválidos';
      return false;
    }
    return true;
  }

  public function close()
  {
    session_destroy();
  }
}

$action = isset($_GET['action']) ? $_GET['action'] : false;
if ($action) {
  switch ($action) {
    case 'create':
      $userCtr = new UserController();
      $userCtr->register();
      break;
    case 'login':
      $userCtr = new UserController();
      $userCtr->login();
      break;
    default:
      echo 'Acción inválida.';
      break;
  }
}
