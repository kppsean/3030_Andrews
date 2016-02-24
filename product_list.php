<?php

include("global.php");
include("header.php");

$category_id = intval($_GET["category_id"]);

$result = mysqli_query($connection,"select * from categories where id = $category_id");
$row = mysqli_fetch_assoc($result);
echo "<h3>" . $row["category_name"] . "</h3>";
$result = mysqli_query($connection,"select * from products where category_id = $category_id order by product_name");

while ($row = mysqli_fetch_assoc($result)) {

	echo $row["product_name"] . "<br />";
	echo "<img src='imgs/" . $row["image"] . "'><br /><br />";
	echo "<a href='product_detail.php?product_id=" . $row["id"] . "'>View Product Info</a>";
}

include("footer.php"); 


?>