<!-- contant -->
	<div class="contant">

		<div class="tables">

			<?php foreach ($posts as $post): ?>

			<div class="tab">
				<div class="table">
					<div class="column1">
						<img src="img/<?php echo $post['image']; ?>" alt="" style="width: 100%; margin-top: 30px;">
						<h2 align="center"><?php echo $post['name']; ?></h2>
						<p><?php echo $post['descmini']; ?></p>
						<h2 align="center">Цена: <?php echo $post['price']; ?> руб. </h2>
					</div>	
				</div>

				<div class="column2">
					<a href="index.php?page=biggest&id=<?php echo $post['id']; ?>"><button style="color: white;" class="button">Подробнее</button></a>
				</div>
			</div>
			<?php endforeach; ?>

		</div>

	</div>


