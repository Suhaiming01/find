<?php 
	$id = $_SESSION["cus_user1"];
	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	
	$checkPass = mysql_query("SELECT * FROM restaurant WHERE res_id='$id' and res_pass='$oldPass'");
	$row = mysql_fetch_array($checkPass);
	
	if($row[0] < 1){
		echo "Password munkin salah";		
	}else{
		$updatePass = mysql_query("UPDATE restaurant SET res_pass='$newPass' WHERE res_id='$id'");
		echo "Perubahan berhasil";
		}
?>