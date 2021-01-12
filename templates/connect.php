<?php
// connecting information
$con = mysqli_connect('127.0.0.1', 'root', 'root', 'shop');

// if db is not working
if (!$con) {
echo "Sorry <br>";
echo mysqli_connect_error();
exit();
}

// importing information from table
$result = mysqli_query($con, "SELECT * FROM `products`");

// sorted information
while($prod = mysqli_fetch_assoc($result)) {
	$posts[] = $prod;
}
?>
