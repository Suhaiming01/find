<?php
	 $id = $_SESSION["cus_user1"];
	 //$add_id = $_POST ['add_id'];
	 $Add_name = $_POST ['Add_name'];
	 $Add_type = $_POST ['Add_type'];
	 $Add_Registration = $_POST ['Add_Registration'];
	 $Add_halal = $_POST ['Add_halal'];
	 $Add_house = $_POST ['Add_house'];
	 $Add_road = $_POST ['Add_road'];
	 $Add_mu= $_POST ['Add_mu'];
	 $district= $_POST ['district'];
	 $amphoe = $_POST ['amphoe'];
	 $province = $_POST ['province'];
	 $zipcode = $_POST ['zipcode'];
	 $Add_lotitude = $_POST ['Add_lotitude'];
	 $Add_longititude = $_POST ['Add_longititude'];
	 $Add_time = $_POST ['Add_time'];
	 $Add_Day = $_POST ['Add_Day'];
	 $Add_seat = $_POST ['Add_seat'];
	 $Add_Description = $_POST ['Add_Description'];
	 $Add_web = $_POST ['Add_web'];
	 $Add_Notes = $_POST ['Add_Notes'];


	 $sql= mysql_query("insert into add_restaurant (res_id,add_type_res,add_Registration,add_halal,add_House,add_road,add_mu,district,amphoe,province,zipcode,add_latitude,add_longititude,add_time,add_seat,add_Day,add_Description,add_web,add_Notes,add_name)
	VALUES('$id','$Add_type','$Add_Registration','$Add_halal','$Add_house','$Add_road','$Add_mu','$district','$amphoe','$province','$zipcode','$Add_lotitude','$Add_longititude','$Add_time','$Add_seat','$Add_Day','$Add_Description','$Add_web','$Add_Notes','$Add_name')");
	
	$resId = mysql_query("SELECT * FROM add_restaurant WHERE add_id = (SELECT MAX(add_id) FROM add_restaurant)");
	$rowResId = mysql_fetch_array($resId);
	$add_id = $rowResId['add_id'];

	//Insert gambar 
    $errors= array();
	foreach($_FILES['Add_Registration_file']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['Add_Registration_file']['name'][$key];
		$file_size =$_FILES['Add_Registration_file']['size'][$key];
		$file_tmp =$_FILES['Add_Registration_file']['tmp_name'][$key];
		$file_type=$_FILES['Add_Registration_file']['type'][$key];	
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        $query="INSERT INTO resimage (add_id,name,type) VALUES('$add_id','$file_name','1'); ";
		// type 1 is docregis
        $desired_dir="resimage";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"resimage/".$file_name);
            }else{									//rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
            mysql_query($query);			
        }else{
                print_r($errors);
        }
    }

	//Insert gambar 
    $errors1= array();
	foreach($_FILES['book_picture']['tmp_name'] as $key1 => $tmp_name1 ){
		$file_name1 = $key1.$_FILES['book_picture']['name'][$key1];
		$file_size1 =$_FILES['book_picture']['size'][$key1];
		$file_tmp1 =$_FILES['book_picture']['tmp_name'][$key1];
		$file_type1 =$_FILES['book_picture']['type'][$key1];	
        if($file_size1 > 2097152){
			$errors1[]='File size must be less than 2 MB';
        }		
        $query1="INSERT INTO resimage (add_id,name,type) VALUES('$add_id','$file_name1','2'); ";
		// type 1 is gallerry
        $desired_dir1="photo_gallery";
        if(empty($errors1)==true){
            if(is_dir($desired_dir1)==false){
                mkdir("$desired_dir1", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir1/".$file_name)==false){
                move_uploaded_file($file_tmp1,"photo_gallery/".$file_name1);
            }else{									//rename the file if another one exist
                $new_dir1="photo_gallery/".$file_name1.time();
                 rename($file_tmp1,$new_dir1) ;				
            }
            mysql_query($query1);			
        }else{
                print_r($errors1);
        }
    }




    echo "<script language='javascript'>alert('คุณต้องการเพิ่มร้านอาหารหรือไม่');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=./index_res.php?page=main'>";
    exit();
?>
