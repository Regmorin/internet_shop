<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LocalHost</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php require 'templates/connect.php'; ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<div class="header__color">
		<div class="header">
			<div class="header_image">
				<a href="/"><img src="img/spots-меш-2d-гаечный-ключ-молоток-пылающий-легкий-значок-векторные-клипарты_csp77586966.png" alt="" width="80"></a>
			</div>
			
			<form action="templates/search.php" method="GET">
				<input type="search" class="search" name="search" placeholder="Поиск">
				<input type="submit" class="search-button" name="search-button" value="Найти">
			</form>
		</div>
	</div>

	<!-- content -->
	<?php 
	$page = $_GET['page'];
	if (!isset($page)) {
		require 'templates/main.php';
	}elseif ($page == 'biggest') {
		$id = $_GET['id'];
		$post = [];
		foreach ($posts as $bigger) {
			if ($bigger['id'] == $id) {
				$post = $bigger;
				break;
			}
		}
		require 'templates/biggest.php';

	}elseif ($page == 'makeOrder') {
		require 'templates/makeOrder.php';
	}elseif ($page == 'payment') {
		require 'templates/payment.php';
	}elseif ($page == 'delivery') {
		require 'templates/delivery.php';
	}elseif ($page == 'license') {
		require 'templates/license.php';
	}elseif ($page == 'aboutUs') {
		require 'templates/aboutUs.php';
	}elseif (!empty($_GET)) {
		require 'templates/search.php';
	}
	?>


	<!-- footer -->
	<div class="footer__color">
		<div class="footer">
			<div class="products">
				<ul class="product1">
					<li style="font-size: 25px; color: white;">Покупателям</a></li><br>
					<li style="font-size: 20px;"><a style="color: #C1AFD0;" href="index.php?page=makeOrder">Как сделать заказ</a></li><br>
					<li style="font-size: 20px;"><a style="color: #C1AFD0;" href="index.php?page=payment">Способы оплаты</a></li><br>
					<li style="font-size: 20px;"><a style="color: #C1AFD0;" href="index.php?page=delivery">Доставка</a></li><br>
					<li style="font-size: 20px;"><a style="color: #C1AFD0;" href="index.php?page=license">Правила пользования торговой площадкой</a></li><br>
				</ul>

				<ul class="product2" style="list-style-type: none;">
					<li style="font-size: 25px; color: white;">Компания</a></li>
					<li style="font-size: 20px;"><a style="color: #C1AFD0;" href="index.php?page=aboutUs">О нас</a></li>
				</ul>

				<ul class="product3" style="list-style-type: none;">
					<li style="font-size: 25px; color: white;">Мы в соцсетях</a></li>
					<li style="font-size: 20px;"><a target="__blank" style="color: #C1AFD0;" href="https://vk.com/public199767720">Вконтакте</a></li>
					<li style="font-size: 20px;"><a target="__blank" style="color: #C1AFD0;" href="https://www.facebook.com/groups/3612651908779519">Facebook</a></li>
					<li style="font-size: 20px;"><a target="__blank" style="color: #C1AFD0;" href="https://www.instagram.com/molotok_moscow/">Instagram</a></li>
				</ul>
			</div>

			<div class="secure">
				<h3 align="center">&copy; Molotok</h3>
			</div>
		</div>
	</div>
</body>
</html>