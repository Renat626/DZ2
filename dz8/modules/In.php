<?php
  session_start();
  require "../services/DB.php";
  class In extends DB {
    public $name;
    public $surname;
    public $password;
    public $user;
    public $sql1;
    public $stmt;
    public $params1;

    public function __construct($name, $surname, $password) {
      $this->name = $name;
      $this->surname = $surname;
      $this->password = $password;
      $this->send();
    }

    public function send() {
      parent::connect();
      $this->sql1 = "SELECT * FROM signin WHERE userName = :userName AND userSurname = :userSurname";
      $this->stmt = parent::connect()->prepare($this->sql1);
      $this->params1 = [':userName' => $this->name,
                 ':userSurname' => $this->surname];
      $this->stmt->execute($this->params1);
      $this->user = $this->stmt->fetch(PDO::FETCH_OBJ);

      if($this->user) {
        $this->insert();
      } else {
         return;
      }
    }

    public function insert() {
      if(password_verify($this->password, $this->user->userPassword)) {
        $_SESSION["userName"] = $this->user->userName;
        $_SESSION["userSurname"] = $this->user->userSurname;
        header("location: ../services/shop.php");
      } else {
        echo <<<php
              <h1>Неправильный пароль</h1>
              <a href="../services/index2.php">Назад</a>
php;
      }
    }
  }

  $in = new In(trim($_POST["userName"]), trim($_POST["userSurname"]), trim($_POST["userPassword"]));
?>
