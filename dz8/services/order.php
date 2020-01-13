<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>document</title>
		<link rel="stylesheet" href="../css/shop3.css">
	</head>
	<body>
		<?php
			echo $_SESSION["userName"] . " ";
			echo $_SESSION["userSurname"];
		?>
		<div>
				<?php
          require "../modules/GetOrder.php";
					$getOrder = new GetOrder();
        ?>
		</div>
		<div class="buttonContainer">
			<div class="personalArea">
				<a href="../services/personalArea.php">Личный кабинет</a>
			</div>
			<div class="buttonExit">
				<a href="../public/index.php">Выйти</a>
			</div>
		</div>
	</body>
</html>
