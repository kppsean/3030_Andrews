<?php 
include("global.php");
include("header.php");

$product_id = intval($_GET["product_id"]);
$result = mysqli_query($connection, "SELECT * FROM products where id = $product_id");
while ($row = mysqli_fetch_assoc($result)) {
?><br><?
	echo '<div class="row">
			<div class="medium-6 columns">
			<img class="thumbnail" src="' . 'imgs/' . $row["image"] . '">
			</div>
			<div class="medium-6 large-5 columns">
			<h3>' . $row["product_name"] . '</h3>
			<p>' . $row["description"] . '</p>
			<div class="row">
			<div class="small-3 columns">
			<label for="middle-label" class="middle">Quantity</label>
			</div>
			<div class="small-9 columns">
			<div class="form">
			<form action="cart_process.php" method="POST">
			<input type="number" id="middle-label" name="product_' . $product_id . '" size="3" placeholder="Select Here">
			<input type="submit" value="Add to Cart">
			</div>
			</div>
			</div>';

} ?>

<br>
<br>

<?php
	include("footer.php");
?>