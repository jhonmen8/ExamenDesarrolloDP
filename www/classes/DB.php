<?php

class DB
{
  private $pdo;
  
  public function __construct($host, $database, $user, $password) {
	$dsn = 'pgsql:host='.$host.';port=5432;dbname='.$database;
    $this->pdo = new PDO($dsn, $user, $password);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  
  public function run($query, $data = [])
  {
    $stm = $this->pdo->prepare($query);
    $stm->execute($data);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function runExec($query, $data = [])
  {
    $stm = $this->pdo->prepare($query);
    $stm->execute($data);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
}