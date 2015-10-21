<?php
	$id = $_POST['id'];
	$Res_user = $_POST['Res_user'];
	$Res_name = $_POST['Res_name'];
	$Res_card = $_POST['Res_card'];
	$Res_email = $_POST['Res_email'] ;
	$Res_phone = $_POST['Res_phone'];
	$tra_Birthday =$_POST['tra_Birthday'];
	$Initials= $_POST['Initials'];


	$update = mysql_query("update restaurant set res_user='$Res_user',res_name='$Res_name',res_card='$Res_card',res_email='$Res_email',res_phone='$Res_phone',res_day	='$tra_Birthday',res_Initials='$Initials' where res_id='$id'");

	
	echo "Berjaya";
?>


