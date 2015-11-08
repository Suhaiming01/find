<?php
	$id = $_POST['id'];
	$Add_name = $_POST ['Add_name'];
	$Add_type = $_POST ['Add_type'];
	$Add_Registration = $_POST ['Add_Registration'];
	$Add_halal = $_POST ['Add_halal'];
	$Add_house = $_POST ['Add_house'];
	$Add_road = $_POST ['Add_road'];
	$Add_mu = $_POST ['Add_mu'];
	$district = $_POST ['district'];
	$amphoe = $_POST ['amphoe'];
	$province = $_POST ['province'];
	$zipcode = $_POST ['zipcode'];
	$Add_lotitude = $_POST ['Add_lotitude'];
	$Add_longititude = $_POST ['Add_longititude'];
	$Add_time = $_POST ['Add_time'];
	$Add_seat = $_POST ['Add_seat'];
	$Add_Day = $_POST ['Add_Day'];
	$Add_Description = $_POST ['Add_Description'];
	$Add_web = $_POST ['Add_web'];
	$Add_Notes = $_POST ['Add_Notes'];
	


	$update = mysql_query("update add_restaurant SET add_name='$Add_name',add_type_res='$Add_type',add_Registration='$Add_Registration',add_halal='$Add_halal',add_House='$Add_house',add_road='$Add_road',add_mu='$Add_mu',district='$district',amphoe='$amphoe',province='$province',zipcode='$zipcode',add_latitude='$Add_lotitude',add_longititude='$Add_longititude',add_time='$Add_time',add_seat='$Add_seat',add_Day='$Add_Day',add_Description='$Add_Description',add_web='$Add_web',add_Notes='$Add_Notes' where add_id='$id'");

	
	echo "<script language='javascript'>alert('คุณได้เเก้ไขข้อมูลร้านอาหารเรียบร้อย');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main'>";
	exit();
?>







