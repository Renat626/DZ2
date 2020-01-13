<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>document</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<div class="container__main">
			<div class="container">
				<form class="" action="../modules/Register.php" method="post">
					<input type="text" name="userName" placeholder="Имя">
					<input type="text" name="userSurname" placeholder="Фамилия">
					<input type="password" name="userPassword" placeholder="Пароль">
					<input type="submit" name="" value="Зарегистрироваться">
				</form>
				<form class="margin_top" action="../services/index2.php" method="post">
					<input type="submit" name="" value="Уже зарегестрировались?">
				</form>
			</div>
		</div>
	</body>
</html>
