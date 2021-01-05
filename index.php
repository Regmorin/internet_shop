<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LocalHost</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
	require 'templates/connect.php';

	?>
	<style>
		body {
			margin: 0;
		}

		.header__color {
			height: 80px;
			width: 100%;
			background-color: #022249;
		}

		.header {
			width: 1700px;
			margin: 0 auto;
			display: flex;
			justify-content: space-between;
		}

		.contant {
			width: 1700px;
			margin: 0 auto;
		}

		.table {
			width: 500px;
			min-height: 600px;
			border: 1px solid black;
			border-radius: 30px;
			margin-top: 40px;
			box-shadow: 10px 10px 50px black;
		}

		.tables {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		.footer__color {
			height: 400px;
			width: 100%;
			background-color: #022249;
			margin-top: 40px;
		}

		.footer {
			width: 1700px;
			margin: 0 auto;
			padding-top: 10px;
		}

		.product1 {
			list-style-type: none;
			width: 280px;
		}

		a {text-decoration: none;}

		.products {
			display: flex;
			justify-content: space-around;
		}

		.button {
			margin-left: 200px;
			margin-bottom: 10px;
			background-color: #022249;
			padding-right: 20px;
			padding-left: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.cleaner {
			color: red;
			margin-bottom: 439px;
		}

		.biggest {
			width: 1700px;
			margin: 0 auto;
			display: flex;
			justify-content: row;
		}

		.desc {
			width: 100%;
		}

		.biggest__image {
			margin-right: 20px;
		}


		.tab {
			display: flex;
			flex-direction: column;
		}

		.table {
			min-height: 750px;
			margin-bottom: 20px;
		}

		.product__delivery {
			background-color: #022249;
			font-size: 30px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			color: white;
		}

		.secure {
			margin-top: 60px;
			color: white;
		}


		/* Поиск */
		.search {
			height: 40px;
			width: 750px;
			border-radius: 30px;
			margin-top: 15px;
			margin-right: 5px;
			font-size: 20px;
		}

		.search-button {
			font-size: 20px;
			height: 45px;
			width: 100px;
			border-radius: 30px;
			margin-top: 15px;
			margin-right: 5px;
		}
	</style>
	


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

			<div class="clean">
				<a href="index.php?page=clean"><img src="img/корзина.png" alt="" width="80"></a>
			</div>
		</div>

	</div>

	<?php 

	$page = $_GET['page'];
	if (!isset($page))
	{
		require 'templates/main.php';
	}elseif ($page == 'biggest')
	{
		$id = $_GET['id'];
		$post = [];
		foreach ($posts as $bigger) {
			if ($bigger['id'] == $id) {
				$post = $bigger;
				break;
			}
		}
		require 'templates/biggest.php';

	}elseif ($page == 'clean')
	{
		require 'templates/clean.php';
	}elseif ($page == 'makeOrder')
	{
		require 'templates/makeOrder.php';
	}elseif ($page == 'payment')
	{
		require 'templates/payment.php';
	}elseif ($page == 'delivery')
	{
		require 'templates/delivery.php';
	}elseif ($page == 'license')
	{
		require 'templates/license.php';
	}elseif ($page == 'aboutUs')
	{
		require 'templates/aboutUs.php';
	}elseif (!empty($_GET))
	{
		require 'templates/search.php';
	}

	?>

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













