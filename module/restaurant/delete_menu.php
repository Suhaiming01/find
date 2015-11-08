<?php
	$id = $_GET['id'];
	$Add_id = $_GET['add_id'];
	
	$sql = mysql_query("DELETE FROM add_menu WHERE add_menu_id='$id'");
	
		
	echo "<script language='javascript'>alert('คุณต้องการลบเมนูอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main_menu&id=$Add_id'>";
	exit();
	 
?>

