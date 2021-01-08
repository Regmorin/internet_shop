<?php 
if ($search_get == "") {
    echo "<h1>Вы ничего не ввели!!!</h1>";
    exit();
}

while ($select_while = mysqli_fetch_assoc($select)):?>

<!-- content -->
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
                <a href="search.php?page=biggest_search&id=<?php echo $select_while['id']; ?>"><button style="color: white;" class="button">Подробнее</button></a>
            </div>
        </div>

    </div>

</div>

<?php endwhile; ?>