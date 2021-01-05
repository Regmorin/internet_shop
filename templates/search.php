<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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

			<div class="clean">
				<a href="index.php?page=clean"><img src="../img/корзина.png" alt="" width="80"></a>
			</div>
		</div>

    </div>


    <?php 
    $connect = mysqli_connect("127.0.0.1", "root", "root", "shop");
    $search_get = $_GET['search'];
    $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$search_get%'";

    $select = mysqli_query($connect, $sql);

    while ($select_while = mysqli_fetch_assoc($select)):?>

    <!-- contant -->
	<div class="contant">

        <div class="tables">

            <div class="tab">
                <div class="table">
                    <div class="column1">
                        <img src="../img/<?php echo $select_while['image']; ?>" alt="" style="width: 100%; margin-top: 30px;">
                        <h2 align="center"><?php echo $select_while['name']; ?></h2>
                        <p><?php echo $select_while['descmini']; ?></p>
                        <h2 align="center">Цена: <?php echo $select_while['price']; ?> руб. </h2>
                    </div>	
                </div>

                <div class="column2">
                    <a href="index.php?page=biggest&id=<?php echo $select_while['id']; ?>"><button style="color: white;" class="button">Подробнее</button></a>
                </div>
            </div>

        </div>

    </div>

    <?php endwhile; ?>



    




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