

<!-- details about product -->
<div class="biggest">
	<img class="biggest__image" src="img/<?php echo $post['image']; ?>" alt="" width="700" height="500">
	<div class="desc">
		<h1 style="margin-bottom: 30px; font-family: 'Potta One', cursive;" align="center"><?php echo $post['name']; ?></h1>
		<p style="font-family: 'Indie Flower', cursive;"><?php echo $post['descmax']; ?></p>
		<hr>
		<div class="info">
			<br>
			<div class="price2">
				<h2 style="font-size: 30px; font-family: 'Potta One', cursive;">Цена: <?php echo $post['price']; ?> руб. </h2>
			</div>

			<div class="price1">
				<span><button class="pay__product">Купить</button></span>
				<span class="product__delivery">8 966 000 2329</span>
			</div>
		</div>
	</div>
</div>

