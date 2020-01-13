<?php
  class DB {
    public $pdo;
    public $config = ["driver" => "mysql",
               "host" => "localhost",
               "db" => "dz by php7",
               "charset" => "UTF8",
               "user" => "root",
               "password" => ""];

    public $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    public function connect() {
      $this->pdo = new \PDO(
        $this->change(),
        $this->config['user'],
        $this->config['password'],
        $this->option
      );

      return $this->pdo;
    }

    public function change() {
      return sprintf(
          '%s:host=%s;dbname=%s;charset=%s',
          $this->config['driver'],
          $this->config['host'],
          $this->config['db'],
          $this->config['charset']
      );
    }
  }
?>
