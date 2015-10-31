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
	 $Add_seat = $_POST ['Add_seat'];
	 $Add_table = $_POST ['Add_table'];
	 $Add_Description = $_POST ['Add_Description'];
	 $Add_web = $_POST ['Add_web'];
	 $Add_Notes = $_POST ['Add_Notes'];


	 $sql= mysql_query("insert into add_restaurant (res_id,add_type_res,add_Registration,add_halal,add_House,add_road,add_mu,district,amphoe,province,zipcode,add_latitude,add_longititude,add_time,add_seat,add_table,add_Description,add_web,add_Notes,add_name)
	VALUES('$id','$Add_type','$Add_Registration','$Add_halal','$Add_house','$Add_road','$Add_mu','$district','$amphoe','$province','$zipcode','$Add_lotitude','$Add_longititude','$Add_time','$Add_seat','$Add_table','$Add_Description','$Add_web','$Add_Notes','$Add_name')");


//echo "ok";
?>
