<!-- doing search file -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- add font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
	<!-- add font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
	<!-- add jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "root", "shop");
    $search_get = $_GET['search'];
    $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$search_get%'";

	$select = mysqli_query($connect, $sql);
	?>
	<?php require "connect.php" ?>


	<style>
		.pay__product {
			background-color: #022249;
			font-size: 30px;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			color: white;
		}

	</style>
</head>
<body>
    <!-- header -->
    <div class="header__color">
		
		<div class="header">
			<div class="header_image">
				<a href="/"><img src="../img/spots-меш-2d-гаечный-ключ-молоток-пылающий-легкий-значок-векторные-клипарты_csp77586966.png" alt="" width="80"></a>
			</div>

			<form action="" method="GET">
				<input type="search" class="search" name="search" placeholder="Поиск">
				<input type="submit" class="search-button" name="search-button" value="Найти">
			</form>
		</div>
	</div>
	    
	<!-- content -->
	<?php 
	$page = $_GET['page'];
	if (!isset($page)) {
		require 'searchform.php';
	}elseif ($page == 'biggest_search') {
		$id = $_GET['id'];
		$post = [];
		foreach ($posts as $bigger) {
			if ($bigger['id'] == $id) {
				$post = $bigger;
				break;
			}
		}
		require 'biggest_search.php';
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


	<script src="../js/script.js"></script>
</body>
</html>