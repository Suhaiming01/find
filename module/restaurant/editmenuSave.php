<?php
	$id = $_POST['id'];
	$Add_menu = $_POST ['Add_menu'];
	$Add_type_menu = $_POST ['Add_type_menu'];
	$Add_Description = $_POST ['Add_Description'];
	$Add_price = $_POST ['Add_price'];
	
	
	$update = mysql_query("update add_menu SET add_menu='$Add_menu',add_type_menu='$Add_type_menu',add_Description='$Add_Description',add_price='$Add_price' where res_id='$id'");

	
	echo "Berjaya";
?>








