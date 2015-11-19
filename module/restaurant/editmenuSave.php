<?php
   //$id = $_SESSION["cus_user1"];
	//$add_id = $_GET ['add_id'];
	$add_menu_id = $_POST['add_menu_id'];
	$id = $_POST['id'];
	$Add_menu = $_POST ['Add_menu'];
	$Add_type_menu = $_POST ['Add_type_menu'];
	$Add_Description = $_POST ['Add_Description'];
	$Add_price = $_POST ['Add_price'];
	
	
	$update = mysql_query("update add_menu SET add_menu='$Add_menu',add_type_menu='$Add_type_menu',add_Description='$Add_Description',add_price='$Add_price' where add_menu_id='$add_menu_id'");

	
	echo "<script language='javascript'>alert('คุณต้องการเเก้เมนูอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main_menu&id=$id'>";
	exit();
	

?>









