<?php 
	$id = $_SESSION["cus_user1"];
	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	
	$checkPass = mysql_query("SELECT * FROM admin WHERE admin_id='$id' and admin_pass='$oldPass'");
	$row = mysql_fetch_array($checkPass);
	
	if($row[0] < 1){
		echo "Password munkin salah";		
	}else{
		$updatePass = mysql_query("UPDATE admin SET admin_pass='$newPass' WHERE admin_id='$id'");
		echo "Perubahan berhasil";
		}
?>