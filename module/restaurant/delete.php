<?php
	$id = $_GET['id'];
	
	$sql = mysql_query("DELETE FROM add_restaurant WHERE add_id='$id'");
	
	//echo "Berjaya";
	
	
	echo "<script language='javascript'>alert('คุณต้องการลบข้อมูลร้านอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main'>";
	exit();
?>
	
	
