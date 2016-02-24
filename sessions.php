<?php 
	
echo session_id();

//get items from cart

$res = mysqli_query($connection, "select * from cart where session_id = '" . session_id()."'")'

where session_id = '1123123123123';