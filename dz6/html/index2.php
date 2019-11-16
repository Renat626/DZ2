<?php
  var_dump($_GET['mathOperation']);
  $number1 = (int)$_GET['number1'];
  $number2 = (int)$_GET['number2'];
  $mathOperation = $_GET['mathOperation'];

  if($mathOperation == '+') {
    $answer = ($number1 + $number2);
  } else if($mathOperation == '-') {
      $answer = ($number1 - $number2);
  } else if($mathOperation == '*') {
      $answer = ($number1 * $number2);
  } else if($mathOperation == '/') {
      if($number1 == 0 || $number2 == 0) {
        $answer = 'На ноль делить нельзя';
      } else {
        $answer = ($number1 / $number2);
      }
  }

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>document</title>
  </head>
  <body>
    <form action="" method="get">
      <input type="text" name="number1" value="">
      <input type="text" name="number2" value="">
      <select name="mathOperation">
        <option name="+">+</option>
        <option name="-">-</option>
        <option name="*">*</option>
        <option name="/">/</option>
      </select>
      <h1><?= $answer ?></h1>
      <input type="submit" name="" value="answer">
    </form>
  </body>
</html>
