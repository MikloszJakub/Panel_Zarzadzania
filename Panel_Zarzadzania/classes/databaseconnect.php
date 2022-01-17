<?php

class DatabaseConnect
{
  private $config;
  private $host;
  private $user;
  private $password;
  private $dbName;

  protected function connect()
  { 
    //from config.ini

    $this->config = parse_ini_file(dirname(__DIR__).'./configs/config.ini', true);
    $this->host = $this->config['host'];
    $this->dbName = $this->config['dbName'];
    $this->user = $this->config['user'];
    $this->password = $this->config['password'];
    $dsn = 'mysql:host=' . $this->host .  ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
