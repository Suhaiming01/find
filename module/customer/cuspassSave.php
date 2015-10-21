<?php 
	$id = $_SESSION["cus_user1"];
	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	
	$checkPass = mysql_query("SELECT * FROM customers WHERE cus_id='$id' and cus_pass='$oldPass'");
	$row = mysql_fetch_array($checkPass);
	
	if($row[0] < 1){
		echo "Password munkin salah";		
	}else{
		$updatePass = mysql_query("UPDATE customers SET cus_pass='$newPass' WHERE cus_id='$id'");
		echo "Perubahan berhasil";
		}
?>