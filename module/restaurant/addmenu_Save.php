<?PHP
     $id = $_SESSION["cus_user1"];
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
			
//Insert gambar 
    $errors= array();
	foreach($_FILES['book_picture']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['book_picture']['name'][$key];
		$file_size =$_FILES['book_picture']['size'][$key];
		$file_tmp =$_FILES['book_picture']['tmp_name'][$key];
		$file_type=$_FILES['book_picture']['type'][$key];	
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
       $query="INSERT INTO resimage_menu (add_id,add_menu_id,name) VALUES('$Add_id','$add_menu_id','$file_name');";
		// type 1 is docregis
        $desired_dir="resimage_menu";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"resimage_menu/".$file_name);
            }else{									//rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
            mysql_query($query);			
        }else{
                print_r($errors);
        }
    }


	echo "<script language='javascript'>alert('คุณต้องการเพิ่มเมนูอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main_menu&id=$Add_id'>";
    exit();
?>