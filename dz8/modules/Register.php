<?php
  require "../services/DB.php";
  class Register extends DB {
      private $name;
      private $surname;
      private $password;
      public $stmt;
      public $params1;
      public $sql1;
      public $user;
      public $sql2;
      public $params2;
      public $sql3;
      public $params3;

      public function __construct($name, $surname, $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->send();
      }

      public function send() {
        parent::connect();
        $this->sql1 = "SELECT * FROM signup WHERE userName = :userName AND userSurname = :userSurname";
        $this->stmt = parent::connect()->prepare($this->sql1);
        $this->params1 = [':userName' => $this->name,
                   ':userSurname' => $this->surname];
        $this->stmt->execute($this->params1);
        $this->user = $this->stmt->fetch(PDO::FETCH_OBJ);

        if(!$this->user) {
          $this->insert();
        } else {
          echo <<<php
                <h1>Такой пользователь уже есть</h1>
                <a href="../public/index.php">Назад</a>
php;
        }
      }

      public function insert() {
        if(!empty($this->name) && !empty($this->surname) && !empty($this->password)) {
          $this->password = password_hash($this->password, PASSWORD_DEFAULT);

          $this->sql2 = "INSERT INTO signup (userName, userSurname, userPassword) VALUES (:userName, :userSurname, :userPassword)";

          $this->stmt = parent::connect()->prepare($this->sql2);
          $this->params2 = [':userName' => $this->name,
                     ':userSurname' => $this->surname,
                     ':userPassword' => $this->password];

          $this->stmt->execute($this->params2);

          $this->sql3 = "INSERT INTO signin (userName, userSurname, userPassword) VALUES (:userName, :userSurname, :userPassword)";
          $this->stmt = parent::connect()->prepare($this->sql3);
          $this->params3 = [':userName' => $this->name,
                     ':userSurname' => $this->surname,
                     ':userPassword' => $this->password];
          $this->stmt->execute($this->params3);
          header("location: ../services/shop.php");
      } else {
        echo <<<php
              <h1>Какое-то из полей пустое, вернитесь и заполните его</h1>
              <a href="../public/index.php">Назад</a>
php;
      }
    }
  }

  $reg = new Register(trim($_POST["userName"]), trim($_POST["userSurname"]), trim($_POST["userPassword"]));
?>
