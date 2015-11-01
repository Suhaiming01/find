<?php
	$id = $_GET['id'];
	
	$sql = mysql_query("DELETE FROM add_menu WHERE add_menu_id='$id'");
	
	echo "Berjaya";
?>

