<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="css/style3.css">
  </head>
  <body>
    <?php
    include 'bd.php';
    $result = mysqlI_query($link, "SELECT * FROM product");
    while ($row = mysqli_fetch_assoc($result)) {
      echo <<<php
            <a href="index4.php?img={$row['img']}&count1={$row['count']}&id={$row['id']}"><img src="img/{$row['img']}"></a>
php;
    }
    ?>
  </body>
</html>
