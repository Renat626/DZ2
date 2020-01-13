<?php
  session_start();
  require "../services/DB.php";
  class AddProduct extends DB {
    public $userName;
    public $userSurname;
    public $productName;
    public $productPrice;
    public $productCount;
    public $productSum;

    public function __construct() {
      $this->userName = $_SESSION["userName"];
      $this->userSurname = $_SESSION["userSurname"];
      $this->productName = $_GET["name"];
      $this->productPrice = $_GET["price"];
      $this->productCount = 1;
      $this->productSum = $_GET["price"];

      $this->addProduct();
    }

    public function addProduct() {
        $sql = "SELECT * FROM basket WHERE userName = :userName AND userSurname = :userSurname AND productName = :productName";
        $stmt = parent::connect()->prepare($sql);
        $params = [':userName' => $this->userName,
                   ':userSurname' => $this->userSurname,
                   ':productName' => $this->productName];
        $stmt->execute($params);
        $product = $stmt->fetch(PDO::FETCH_OBJ);

        if(!$product) {
          $this->insert();
        } else {
           $this->update();
        }
    }

    public function insert() {
      $sql = "INSERT INTO basket (userName, userSurname, productName, productPrice, productCount, productSum)
      VALUES (:userName, :userSurname, :productName, :productPrice, :productCount, :productSum)";
      $stmt = parent::connect()->prepare($sql);
      $params = [':userName' => $this->userName,
                 ':userSurname' => $this->userSurname,
                 ':productName' => $this->productName,
                 ':productPrice' => $this->productPrice,
                 ':productCount' => $this->productCount,
                 ':productSum' => $this->productSum];
      $stmt->execute($params);
    }

    public function update() {
      $sql = "UPDATE basket SET productCount = productCount + 1, productSum = productPrice * productCount";
      $stmt = parent::connect()->prepare($sql);
      $params = [':productPrice' => $this->productPrice,
                 ':productCount' => $this->productCount];
      $stmt->execute($params);
    }
  }

  $addProduct = new AddProduct();

?>
