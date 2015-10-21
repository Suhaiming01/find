<?php
	$id = $_POST['id'];
	$Cus_user = $_POST['Cus_user'];
	$Cus_Name = $_POST['Cus_Name'];
	$Cus_card = $_POST['Cus_card'];
	$Cus_email = $_POST['Cus_email'] ;
	$Cus_phone = $_POST['Cus_phone'];
	$Cus_Address = $_POST['Cus_Address'];
	$tra_Birthday =$_POST['tra_Birthday'];
	$Cus_initial= $_POST['Initials'];

	$update = mysql_query("update customers set cus_user='$Cus_user',cus_Name='$Cus_Name',cus_card='$Cus_card',cus_email='$Cus_email',cus_phone='$Cus_phone', cus_add='$Cus_Address',cus_day='$tra_Birthday',Cus_Initials='$Cus_initial' where cus_id='$id'");

	echo "Berjaya";
?>


