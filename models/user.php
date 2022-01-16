<?php
class User
{
  public static function getUserByEmail(string $email)
  {
    $query = 'SELECT * FROM `users` WHERE email = :email';
    $db = new DB();
    $db->connection();
    $classes = $db->pdoObj->prepare($query);
    $classes->execute(['email' => $email]);
    $db->close();
    return $classes->fetch();
  }

  public static function createUser(array $user)
  {
    $query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $db = new DB();
    $db->connection();
    $userConn = $db->pdoObj->prepare($query);
    $userConn->bindParam('email', $user['email']);
    $userConn->bindParam('password', $user['password']);
    $response = $userConn->execute();
    $db->close();
    return $response;
  }
}
