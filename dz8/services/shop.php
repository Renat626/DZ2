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
		<div class="container__main">
				<?php
          require "../modules/Product.php";
					$product = new Product();
        ?>
		</div>
		<div class="buttonContainer">
			<div class="personalArea">
				<a href="../services/personalArea.php">Личный кабинет</a>
			</div>
			<div class="buttonExit">
				<a href="../public/index.php">Выйти</a>
			</div>
			<?php
				if($_SESSION["userName"] == "admin" && $_SESSION["userSurname"] == "admin") {
					echo <<<php
						<div class="buttonStatus">
							<a href="../services/order.php">Проверить заказы</a>
						</div>
php;
				}
			?>
		</div>
	</body>
</html>
