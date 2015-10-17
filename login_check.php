<?php
 @session_start();
  include("connectdb.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $sql1 = mysql_query("select * from customers where cus_user='$username' and cus_pass ='$password'");
  $row1 = mysql_fetch_array($sql1);
	
	if(!$row1){
		$sql2 = mysql_query("select * from restaurant where res_user='$username' and res_pass ='$password'");
		$row2 = mysql_fetch_array($sql2);
		
		if(!$row2){
			echo "<meta http-equiv='refresh' content='1 ;url=userlogin.php'>";
		}else{
			$_SESSION["cus_user1"] = $row2["res_id"];
			session_write_close();
			echo "<meta http-equiv='refresh' content='1 ;url=index_res.php'>";
		}
			
	}else{
		$_SESSION["cus_user1"] = $row1["cus_id"];
		session_write_close();
		echo "<meta http-equiv='refresh' content='1 ;url=index.php'>";
	}
	mysql_close();	
?>
	
	
	
	
	
  
