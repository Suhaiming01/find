<?php
	$id = $_GET['id'];
	
	$sql = mysql_query("DELETE FROM add_restaurant WHERE add_id='$id'");
	
	echo "Berjaya";
?>
	
	
