<?PHP
	 $id = $_POST['id'];
	 $add_menu_id = $_POST ['add_menu_id'];
	 $Add_menu = $_POST ['Add_menu'];
	 $Add_type_menu = $_POST ['Add_type_menu'];
	 $Add_Description =$_POST ['Add_Description'] ;
	 $Add_price = $_POST ['Add_price'];
	 
	$sql= "insert into add_menu (res_id,add_menu,add_type_menu,add_Description,add_price) VALUES('$id','$Add_menu','$Add_type_menu','$Add_Description','$Add_price ')";
	
	
	$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
	if($qr)
	{
		
		echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มเมนูอาหารเรียบร้อย</h2>";
		header("refresh:2;url:listuser.php");
		}else{
			echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มเจ้าของร้านอาหารได้</h2>";
			}
?>
