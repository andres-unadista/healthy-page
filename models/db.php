<?php
class DB
{
  private string $dbName;
  private string $user;
  private string $pass;
  public PDO $pdoObj;

  public function __construct()
  {
    $this->dbName = 'test_db_practice';
    $this->user = 'root';
    $this->pass = '';
  }

  public function connection()
  {
    try {
      $this->pdoObj = new PDO('mysql:host=localhost;dbname=' . $this->dbName, $this->user, $this->pass, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    } catch (Exception $e) {
      die($e);
    }
  }

  public function close()
  {
    $this->pdo = null;
  }
}
