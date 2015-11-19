<?php
	$res_id = $_POST['res_id'];
	$save = $_POST['save'];
	
	//echo $save;
	if($save == "commit"){
		$update = mysql_query("UPDATE restaurant SET register_status='1' WHERE res_id='$res_id'");
	}else{
		$update = mysql_query("UPDATE restaurant SET register_status='0' WHERE res_id='$res_id'");
		}
  echo "OK";
?>