<?php
  require "../services/DB.php";
  class ChangeOrder extends DB {
    public $status;
    public $id;

    public function __construct() {
      $this->status = $_POST["status"];
      $this->id = $_POST["id"];
      $this->changeOrder();
    }

    public function changeOrder() {
      $sql = "UPDATE basket SET status = :status WHERE id = :id";
      $stmt = parent::connect()->prepare($sql);
      $params = [':status' => $this->status,
                 ':id' => $this->id];
      $stmt->execute($params);
    }
  }

  $changeOrder = new ChangeOrder();
  header("location: ../services/order.php");
?>
