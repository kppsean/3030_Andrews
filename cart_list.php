<?
	include("global.php");
	include("header.php");

$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '".session_id()."'"); ?>
<br>
<form action="cart_process.php" method="POST"> 
	<h2 align="center">Cart</h2>
<? while ($row = mysqli_fetch_assoc($result)) {

	echo '<div class="row medium-8 large-7 columns">
			<div class="blog-post">
			<ul class="menu simple">
			<h6>' . $row["product_name"] . '</h6>
			<input type="number" value=' . $row["quantity"] . ' name="product_' . $row["product_id"] . '" size="3">' . '<br />
			</ul>
			<br>
			</div>
			</div>';
}
?>
<div class="blog-post" align="center">
<?
echo '<input type="submit" value="Update Cart"> <br><br>
	  <input type="submit"  value="Checkout" name="checkout">';
?>
</div>
<br>
<?
	include("footer.php");
?>