<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="css/style3.css">
  </head>
  <body>
    <?php
    include 'bd.php';
    $id = (int)$_GET['id'];
    mysqli_query($link, "UPDATE product SET count = count + 1 WHERE id = $id");
      echo <<<php
            <img src="img/{$_GET['img']}">
            <p>{$_GET['count1']}</p>
            <a href="index3.php">Вернуться назад</a>
php;

    $comment = $_POST["comment"];
    $name = $_POST["name_user"];
    if ($comment == '' && $name == '') {
      echo "";
    } else {
        $sql = "INSERT INTO comment (product_id, user_comment, name_user) VALUES ('$id', '$comment', '$name')";
        mysqli_query($link, $sql);
        // if (mysqli_query($link, $sql)) {
        //   echo "New record created successfully";
        // } else {
        //       echo "Error: " . $sql . "<br>" . mysqli_error($link);
        // }
      }

    ?>
    <form action="" method="post">
      <label for="comment">comment</label>
      <textarea name="comment" rows="8" cols="80"></textarea><br>
      <label for="name_user">name</label>
      <input type="text" name="name_user">
      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
