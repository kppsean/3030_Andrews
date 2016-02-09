<?php
	
	include("global.php");
	include("header.php");
	
	$sql = "SELECT * FROM products WHERE category_id = " .intval($_GET["id"]);
	$result = mysqli_query($connection, $sql);
	
	
while ($row = mysqli_fetch_assoc($result)) {
		echo "<img src='imgs/" . $row["image"] . "' width=200px>";
		echo "<h1>" . $row["product_name"] . "</h1>" ;
		echo "<h3>" . $row["description"] . "</h3>" ;
		echo  $row["category_name"];
		
		}
		

	include("footer.php")
?>