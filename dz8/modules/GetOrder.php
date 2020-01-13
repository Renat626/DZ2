<?php
  require "../services/DB.php";
  class GetOrder extends DB {
    public function __construct() {
      $this->showOrder();
    }

    public function showOrder() {
      $sql = "SELECT * FROM basket";
      $stmt = parent::connect()->query($sql);
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo <<<php
              <form action="../modules/ChangeOrder.php" method="post">
                <h1>$row[id]</h1>
                <p>Имя: $row[userName]</p>
                <p>Фамилия: $row[userSurname]</p>
                <p>Название продукта: $row[productName]</p>
                <p>Цена продукта: $row[productPrice]</p>
                <p>Количество продуктов: $row[productCount]</p>
                <p>Сумма продуктов: $row[productSum]</p>
                <p>Статус: $row[status]</p>
                <p>Изменить статус</p>
                <input type="text" name="id" value="$row[id]" class="invisible">
                <select name="status">
                  <option>Заказан</option>
                  <option>Оплачен</option>
                  <option>Отгружен</option>
                  <option>Доставлен</option>
                </select>
                <input type="submit" value="Отправить">
                <hr>
              </form>
php;
      }
    }
  }
?>
