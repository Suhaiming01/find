<?PHP
     $id = $_SESSION["cus_user1"];
	 //$add_menu_id = $_POST ['add_menu_id'];
	 $Add_id = $_POST ['id'];
	 $Add_menu = $_POST ['Add_menu'];
	 $Add_type_menu = $_POST ['Add_type_menu'];
	 $Add_Description =$_POST ['Add_Description'] ;
	 $Add_price = $_POST ['Add_price'];
	 
	  $sql= mysql_query("insert into add_menu (res_id,add_id,add_menu,add_type_menu,add_Description,add_price) 
	VALUES('$id','$Add_id','$Add_menu','$Add_type_menu','$Add_Description','$Add_price')");
	
	$resId = mysql_query("SELECT * FROM add_menu WHERE add_menu_id = (SELECT MAX(add_menu_id) FROM add_menu)");
	$rowResId = mysql_fetch_array($resId);
	$add_menu_id = $rowResId['add_menu_id'];
	
	
	
		
		//echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มเมนูอาหารเรียบร้อย</h2>";
		//header("refresh:2;url:listuser.php");
		//}else{
			//echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มเจ้าของร้านอาหารได้</h2>";
			
	
	echo "<script language='javascript'>alert('คุณต้องการเพิ่มเมนูอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main_menu&id=$Add_id'>";
    exit();
?>
