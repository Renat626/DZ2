<?php
  require "../services/DB.php";
  class Product extends DB {
    public function __construct() {
      $this->getProduct();
    }

    public function getProduct() {
      $sql = "SELECT * FROM product";
      $result = parent::connect()->query($sql);

      while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo <<<php
            <div class="container">
              <img src="../img/$row[img]">
              <h1>$row[name]</h1>
              <p>$row[price]</p>
              <a href="../modules/AddProduct.php?id=$row[id]&count=$row[count]&name=$row[name]&img=$row[img]&price=$row[price]">Купить</a>
            </div>
php;
      }
    }
  }
?>
