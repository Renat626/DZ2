<?php
  session_start();
  require "../services/DB.php";
  class Basket extends DB {
    public $name;
    public $surname;
    public $user;

    public function __construct() {
      $this->name = $_SESSION["userName"];
      $this->surname = $_SESSION["userSurname"];
      $this->getProduct();
    }

    public function getProduct() {
      parent::connect();
      $sql = "SELECT userName, userSurname FROM basket WHERE userName = :userName AND userSurname = :userSurname";
      $stmt = parent::connect()->prepare($sql);
      $params = [':userName' => $this->name,
                 ':userSurname' => $this->surname];

      $stmt->execute($params);
      $user = $stmt->fetch(PDO::FETCH_OBJ);

      if($user) {
          $this->showProduct();
      } else {
          echo "Корзина пуста";
        }
    }

    public function showProduct() {
      $sql = "SELECT * FROM basket WHERE userName = :userName AND userSurname = :userSurname";
      $stmt = parent::connect()->prepare($sql);
      $params = [':userName' => $this->name,
                 ':userSurname' => $this->surname];

      $stmt->execute($params);

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo <<<php
                <h1>$row[id]</h1>
                <p>Название товара: $row[productName]</p>
                <p>Цена товара: $row[productPrice]</p>
                <p>Количество товара: $row[productCount]</p>
                <p>Сумма товаров: $row[productSum]</p>
                <hr>
php;
      }
    }
  }
?>
