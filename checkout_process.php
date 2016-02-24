<?php 
include("global.php");
include("jwu_mail.php");


$name = mysqli_real_escape_string($connection,$_POST["name"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

	if ($name == "")
		$errormessage = $errormessage . "Name cannot be blank<br />";

	if ($address == "")
		$errormessage = $errormessage . "Address cannot be blank<br />";

	if ($city == "")
		$errormessage = $errormessage . "City cannot be blank<br />";

	if ($zip == "")
		$errormessage = $errormessage . "Zip Code cannot be blank<br />";

	if ($errormessage != "") {
		include("checkout_form.php");
		die();
	}

include ("header.php");
	echo '<div class="row medium-8 large-7 columns">
	<h2>Thanks! Your order has been placed!</h2>';
	
	echo '<div class="row medium-8 large-7 columns">
		  <div class="blog-post">
		  <ul class="menu simple">
		  <br>
		  <h5>Order Summary</h5>
		  <p>Full Name: '. $_POST["name"] .' <br />
		  <p>Address: '. $_POST["address"] .' <br />
		  <p>City: '. $_POST["city"] .' <br />
		  <p>State: '. $_POST["state"] .' <br />
		  <p>Zip Code: '. $_POST["zip"] .' <br />
		  </div>
		  </div>'
		  ;
		

$result = mysqli_query($connection, "select * from cart join products on (cart.product_id = products.id) where session_id = '" . session_id() . "' order by product_id");


while ($row = mysqli_fetch_assoc($result)) {
	echo '<img class="thumbnail" src="' . 'imgs/' . $row["image"] . '">
			<h3>' . $row["product_name"] . '</h3>
			<h5>' . $row["quantity"] . '</h5>
			</div>';



include("jwu_mail.php");
	$message= "Hello, " . $name . "\n" .
        "your order for " . $row['product_name'] . " " . $row['quantity'] . " has been received. \n\n It's being shipped out to " . $address .
         " " . $city . ", " . $state . " " . $zip . " " . " and should arrive soon. \n\n Thanks for shopping with us!";
	jwu_mail("spa784@jwu.edu","Test", $message);

}

include("footer.php");
?>