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
		$sql3 = mysql_query("select * from admin where admin_user='$username' and admin_pass ='$password'");
		$row3 = mysql_fetch_array($sql3);
	
	
	if(!$row2){
			echo "<meta http-equiv='refresh' content='1 ;url=userlogin.php'>";
	
	if(!$row3){
			echo "<meta http-equiv='refresh' content='1 ;url=userlogin.php'>";
		
		
		
		}else{
			$_SESSION["cus_user1"] = $row3["admin_id"];
			session_write_close();
			echo "<script language='javascript'>alert('ยินดีต้อนรับเข้าสู่ระบบ');</script>";
			echo "<meta http-equiv='refresh' content='1 ;url=index_admin.php'>";
		}
		}
		
		}else{
			$_SESSION["cus_user1"] = $row2["res_id"];
			session_write_close();
			$res_id = $_SESSION["cus_user1"];
			$check = mysql_query("SELECT * FROM restaurant WHERE res_id='$res_id'");
			$rowCheck = mysql_fetch_array($check);
			$register_status = $rowCheck['register_status'];
			if($register_status == 0){
				echo "<script language='javascript'>alert('รอการยืนยันก่อน');</script>";
				echo "<meta http-equiv='refresh' content='1 ;url=userlogin.php'>";
				}else{
			echo "<script language='javascript'>alert('ยินดีต้อนรับเข้าสู่ระบบ');</script>";
			echo "<meta http-equiv='refresh' content='1 ;url=index_res.php?page=main'>";
				}
			//echo "<meta http-equiv='refresh' content='1 ;url=index_res.php?page=main'>";
		}
		
		}else{
		$_SESSION["cus_user1"] = $row1["cus_id"];
		session_write_close();
		echo "<script language='javascript'>alert('ยินดีต้อนรับเข้าสู่ระบบ');</script>";
		echo "<meta http-equiv='refresh' content='1 ;url=index.php'>";
		
	}
	
		mysql_close();
		
	
?>
	
	
	
	
	
  
